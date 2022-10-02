<?php 


////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Registration / Funkcje rejestracji ////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////   Checking empty inputs   /////////////////////////////////////////
                                                                //if any fields are empty
function emptyInputSignup($name, $surname, $email, $username, $pwd, $pwdRepeat, $numPatent, $birthday){
    $result;
    if (empty(trim($name)) || empty(trim($surname)) || empty(trim($email)) || empty(trim($username)) || empty(trim($pwd)) || empty(trim($pwdRepeat)) || empty(trim($numPatent)) || empty(trim($birthday)) ) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

////////////////////////////////   Checking empty inputs   /////////////////////////////////////////
/////////////////////////////   Checking invalid nickname   ////////////////////////////////////////

function invalidUid($username){                                 //if username is invalid
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
/////////////////////////////   Checking invalid nickname   ////////////////////////////////////////
/////////////////////////////    Checking invalid Email     ////////////////////////////////////////

function invalidEmail($email){                                  //if email is invalid
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

/////////////////////////////    Checking invalid Email     ////////////////////////////////////////
///////////////////////////   Checking if passwords match   ////////////////////////////////////////

function pwdMatch($pwd, $pwdRepeat){                            //if passwords match
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
} 

///////////////////////////   Checking if passwords match   ////////////////////////////////////////
////////////////////////   Checking if user already exist   ////////////////////////////////////////


function uidExists($conn, $username, $email){                                                       //Checking if user already exist via login and email
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../rejestracja.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}
////////////////////////   Checking if user already exist   ////////////////////////////////////////
////////////////////////     Checking if checkbox is set    ////////////////////////////////////////


//Function for checkbox of statute

function statuteCheck($statute){                                                            //if "warunki regulaminu" is set
    return !isset($_POST['statute']) || $_POST['statute'] !== 'Yes';
}

//////////

////////////////////////     Checking if checkbox is set    ////////////////////////////////////////
/////////////////////    Creating user to database 'users'   ///////////////////////////////////////


function createUser($conn, $name, $surname, $email, $username, $pwd, $numPatent, $birthday){                                                    //creating a user into database
    $sql = "INSERT INTO users (usersName, usersSurname, usersEmail, usersUid, usersPwd, numPatent, birthday) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../rejestracja.php?error=stmtcreateuserfailed");
        exit();
    }


    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sssssss", $name, $surname, $email, $username, $hashedPwd, $numPatent, $birthday); 
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../logowanie.php?error=none");
    exit();
}

//////////////////////    Creating user to database users   ////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Registration / Funkcje rejestracji ////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Login / Funkcje Logowania /////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////   checking if login input is empty   ////////////////////////////////////////

function emptyInputLogin($username, $pwd){                              //if Login input is empty
    $result;
    if (empty(trim($username)) || empty(trim($pwd)) ) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//////////////////////   checking if login input is empty   ////////////////////////////////////////
/////////////////  Loggin user to the site and starting session   //////////////////////////////////

function loginUser($conn, $username, $pwd){                             //creating session and logging user
        $uidExists = uidExists($conn, $username, $username);

        if ($uidExists == false) {
            header("location: ../logowanie.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $uidExists["usersPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if ($checkPwd === false) {
            header("location: ../logowanie.php?error=wrongpassword");
            exit();
        }
        elseif ($checkPwd === true){
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            
            header("location: ../index.php");
            exit();
        }

}

/////////////////  Loggin user to the site and starting session   //////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Login / Funkcje Logowania /////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////  Booking system / Funkcje rezerwacji ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////  checking if there's empty data set, just in case   //////////////////////////////

function emptyBooking($bookingStart, $bookingEnd){                      //checking if field is empty, just in case
    if(empty(trim($bookingStart)) || empty(trim($bookingEnd)) ){
        header("location: ../flota.php?error=emptyinput");   ///ERROR HANDLER
        exit();
    }
}

/////////////////  checking if there's empty data set, just in case   //////////////////////////////
///////////////////////////////     user limit for booking     /////////////////////////////////////


function moreThanThree($conn, $userId){
    $sql = "SELECT id FROM renting WHERE usersId='".$userId."'";
    if ($checkRow = mysqli_query($conn, $sql)) {
        if ($checkRow -> num_rows >= 3) {
            header("location: ../flota.php?error=limit");   ///ERROR HANDLER
            exit();
        }
    }
}

///////////////////////////////     user limit for booking     /////////////////////////////////////
///////////  checking if first picked data is more futuristic than the second one   ////////////////

function moreThanSecond($bookingStart, $bookingEnd){                    //checking if start date is smaller than end date
    if($bookingStart > $bookingEnd){
        header("location: ../flota.php?error=invalidDate");         ///ERROR HANDLER
        exit();
    }
}

///////////  checking if first picked data is more futuristic than the second one   ////////////////
//////////////////////////  Getting information aboutt jachtId   ///////////////////////////////////

function fetchrow($conn, $jachtName){                          //taking information about jachtId from database

    $sql = "SELECT jachtId FROM jachty WHERE jachtName = '".$jachtName."'";
    if ($jachtIdnum = mysqli_query($conn, $sql)) {
        while($row = mysqli_fetch_assoc($jachtIdnum)){
            $jachtid_row = $row['jachtId'];
        }
        return $jachtid_row;
    }
    else{
        header("location: ../flota.php?error=fetchrowE");   ///ERROR HANDLER
    }
}

//////////////////////////  Getting information aboutt jachtId   ///////////////////////////////////
///////////////////  If picked booking date is colliding with someones   ///////////////////////////
    
function bookTaken($conn, $jachtId, $bookingStart, $bookingEnd){              //checking if value is already booked

    $sql = "SELECT jachtId FROM renting WHERE jachtId=$jachtId AND (bookingStart <= '$bookingEnd' AND bookingEnd >= '$bookingStart');";

        if ($result = mysqli_query($conn, $sql)) {
        
            if (!mysqli_query($conn, $sql)) {
                header("location: ../flota.php?error=somethinWentWrong");   ///ERROR HANDLER for coding person
                exit();
            }

                
            $row_cnt = mysqli_num_rows($result);        //counting received rows
            if ($row_cnt > 0) {
                return true;
            }
            else{
                return false;
            }
    }
}


///////////////////  If picked booking date is colliding with someones   ///////////////////////////
//////////////////////  Creating a reservation into database   /////////////////////////////////////

function sendBooking($conn, $jachtId, $userId, $bookingStart, $bookingEnd){         //creating  record in database

    $sql = "INSERT INTO renting (jachtId, usersId, bookingStart, bookingEnd) VALUES ('".$jachtId."','". $userId."','". $bookingStart."','".$bookingEnd."') ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../flota.php?error=stmtcreatebookfailed");   ///ERROR HANDLER
        exit();
    }
    else{
        if ($conn -> query($sql)) {
            header("location: ../udanarezerwacja.php");
        }
        else{
            header("location: ../flota.php?error=creatingRowError");  ///ERROR HANDLER
        }
    }
}

//////////////////////  Creating a reservation into database   /////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////  Booking system / Funkcje rezerwacji ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////  Contact functions / Funkcje kontaktu //////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////  Checking if inputs in contact are empty   //////////////////////////////////

function emptyInputContact($mail, $subject, $message){                              //if Login input is empty
    $result;
    if (empty(trim($mail)) || empty(trim($subject)) || empty(trim($message)) ) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//////////////////////  Checking if inputs in contact are empty   //////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////  Contact functions / Funkcje kontaktu //////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////    Account System / System konta    ////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////// GET PASSWORD/everything FROM DATABASE //////////////////////////

function gatherInf($conn, $useruid){                              //gathering informations
    $sql = "SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../dane.php?error=stmtE1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $useruid);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

/////////////////////////////////// GET PASSWORD/everything FROM DATABASE //////////////////////////
/////////////////////////////////// CHECK IF EMAIL IS ALREADY TAKEN ////////////////////////////////

    function emailExist($conn, $newEmail){
        $sql = "SELECT * FROM users WHERE usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../rejestracja.php?error=stmtemailcheck");
                exit();
            }
        mysqli_stmt_bind_param($stmt, "s", $newEmail);
        mysqli_stmt_execute($stmt);
        
        $resultData = mysqli_stmt_get_result($stmt);
        
            if ($row = mysqli_fetch_assoc($resultData)) {
                return $row;
            }
            else{
                $result = false;
                return $result;
            }
        
        mysqli_stmt_close($stmt);
    }

/////////////////////////////////// CHECK IF EMAIL IS ALREADY TAKEN ////////////////////////////////
//////////////////////////////////// VARIANTS FOR EMPTY INPUT //////////////////////////////////////

function emptyDaneField($newEmail, $newNumPatent, $Pwd){     //checking if new Email or Patent is typped
if (!empty(trim($Pwd))) {
        $result;
        if (empty(trim($newEmail)) && empty(trim($newNumPatent))) {
                $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    else{
        header("location: ../dane.php?error=emptyPwd");
    }  
}

//////////////////////////////////// VARIANTS FOR EMPTY INPUT //////////////////////////////////////
//////////////////////////////////// FINALLY UPDATING NEW INFORMATIONS /////////////////////////////

function newDane($conn, $newEmail, $newNumPatent, $Pwd, $useruid){

    $gatherInf = gatherInf($conn, $useruid);
    $pwdHashed = $gatherInf["usersPwd"];
    $checkPwd = password_verify($Pwd, $pwdHashed);

    
        
        if ($checkPwd === true){
            if(!empty(trim($newEmail))){                              //if value isn't empty do:
                if(isset($_POST["zEmail"])){
                        if(filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
                            if(emailExist($conn, $newEmail) !== false){
                                header("location: ../dane.php?error=emailtaken");        ///ERROR HANDLER
                                exit();
                            }
                            else{
                                $sql = "UPDATE users SET usersEmail=? WHERE usersUid=?";    //Update email in users table
                                $stmt = mysqli_stmt_init($conn);
                        
                                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                                        header("location: ../dane.php?error=stmtE2");        ///ERROR HANDLER
                                        exit();
                                        }
                                mysqli_stmt_bind_param($stmt, "ss", $newEmail, $useruid);

                                mysqli_stmt_execute($stmt);
                                mysqli_stmt_close($stmt);
                            }
                        }
                        else{
                            header("location: ../dane.php?error=wrongemail");        ///ERROR HANDLER
                            exit();
                        }

                }
            }
                

            if(!empty(trim($newNumPatent))){                           //if value isn't empty do:       
                if(isset($_POST["zPatent"])){
                    $sql = "UPDATE users SET numPatent=? WHERE usersUid=?";    //Update patent number in users table
                    $stmt = mysqli_stmt_init($conn);
                    
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("location: ../dane.php?error=stmtE3");        ///ERROR HANDLER
                            exit();
                        }
                    mysqli_stmt_bind_param($stmt, "ss", $newNumPatent, $useruid);
                            
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                }
            }
        }
        elseif ($checkPwd === false) {
            header("location: ../dane.php?error=wrongpassword");
            exit();
        }
}
//////////////////////////////////// FINALLY UPDATING NEW INFORMATIONS /////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////    Account System / System konta    ////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////    Rent history / historia rezerwacji    //////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////  Selecting information to fill needed variables  /////////////////////////////

function getValues($conn, $userid){
    $sql = "SELECT renting.*, jachty.jachtName FROM renting INNER JOIN jachty ON renting.jachtId = jachty.jachtId WHERE usersId = '".$userid."'";
    if ($listStmt = mysqli_query($conn, $sql)) {
        while($row = mysqli_fetch_array($listStmt)){
            $jachtId = $row["jachtId"];
            $bookingStart = $row["bookingStart"];
            $bookingEnd = $row["bookingEnd"];
            $jachtName = $row["jachtName"];
            $bookid = $row["id"];
            $path = "includes/deletebook.inc.php?bookid=".$bookid;
                                                                        //Echo'ing information about user account
            echo '
                    <section class="jacht">
                        <div>'
                        .$jachtName. 
                        '</div>
                        <div>'
                        .$bookingStart.
                        '</div>
                        <div>'
                        .$bookingEnd.
                        '</div>
                        <a class="buttons" href="' . $path . '">Usuń</a>
                    </section>
                    ';
        }
    }
    else{
        header("location: ../index.php?error=rentingdaneError");   ///ERROR HANDLER
    }
}

/////////////////////  Selecting information to fill needed variables  /////////////////////////////
/////////////////////////////  Deleting selected reservation  //////////////////////////////////////

function deletebook($conn, $bookid){
    $sql = "DELETE FROM renting WHERE id='".$bookid."'";
    if ($deleteStmt = mysqli_query($conn, $sql)) {
        header("location: ../historia.php?error=none");   ///ERROR HANDLER
    }
    else{
        header("location: ../historia.php?error=deletingError");   ///ERROR HANDLER
    }
}

/////////////////////////////  Deleting selected reservation  //////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////    Rent history / historia rezerwacji    //////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////    Reset system / funkcje resetu    ///////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

function emailNotExist($conn, $email){      //searching for not existing email
    
    $result;
    $sql = "SELECT * FROM users WHERE usersEmail = '".$email."'";
    if ($search = mysqli_query($conn, $sql)){
        if ($search -> num_rows < 1) {
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    else{
        header("location: ../odzyskiwanie.php?error=stmtE7");        ///ERROR HANDLER
        exit();
    }
}


////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////    Reset system / funkcje resetu    ///////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////