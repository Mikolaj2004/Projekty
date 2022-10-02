<?php

if (isset($_POST["reset-password-submit"])) {
   
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty(trim($password)) || empty(trim($passwordRepeat))) {           // simple validation
        header("location: ../odzyskiwanie.php?error=empty");       ///ERROR HANDLER
        exit();
    }
    else if($password != $passwordRepeat){
        header("location: ../odzyskiwanie.php?error=pwdnotsame");      ///ERROR HANDLER
        exit();
    }

    $currentDate = date("U");

    require 'dbh.inc.php';

    $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= '".$currentDate."';";        //checking if there's existing reset password token
    $stmt = mysqli_stmt_init($conn);        //prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../odzyskiwanie.php?error=stmtE1");        ///ERROR HANDLER
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $selector);       //tells that ?-mark above to what to change into (selector)
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);        //taking all information into $result
        if (!$row = mysqli_fetch_assoc($result)) {
            header("location: ../odzyskiwanie.php?error=stmtE2");        ///ERROR HANDLER
        exit();
        }
        else{
            $tokenBin = hex2bin($validator);            //token binary and matching with database
            $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

            if ($tokenCheck === false) {
                header("location: ../odzyskiwanie.php?error=tokenNotMatch");        ///ERROR HANDLER
        exit();
            }
            elseif($tokenCheck === true){
                
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE usersEmail = ?;";         //selecting informations via email in users database
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../odzyskiwanie.php?error=stmtE3");        ///ERROR HANDLER
                    exit();
                }
                else{               
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);    //tells that ?-mark above to what to change into (tokenEmail)
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);        //taking all information into $result
                    if (!$row = mysqli_fetch_assoc($result)) {
                        header("location: ../odzyskiwanie.php?error=stmtE4");        ///ERROR HANDLER
                        exit();
                    }
                    else{


                        $sql = "UPDATE users SET usersPwd=? WHERE usersEmail=?";    //Update passwords in users table
                        $stmt = mysqli_stmt_init($conn);


                        
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../odzyskiwanie.php?error=stmtE5");        ///ERROR HANDLER
                        exit();
                    }
                    else{
                        $newPwdHash = password_hash($password, PASSWORD_DEFAULT);       //hashing for database          
                        mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);    //tells that ?-mark above to what to change into (tokenEmail & password hashed)
                        mysqli_stmt_execute($stmt);


                        $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";        //deleting existing tokens included into specific email
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("location: ../odzyskiwanie.php?error=tokenresetE");
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                            mysqli_stmt_execute($stmt);
                            header("location: ../logowanie.php?newpwd=passwordupdate");
                        }
                    }
                    }
                }
            }
        }
    }


}
else{
    header("location: ../logowanie.php?error=movedWrongly");
    exit();
}