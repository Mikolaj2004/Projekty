<?php

session_start();


require_once 'functions.inc.php';

if (isset($_POST['reset-request-submit'])) {

    $selector = bin2hex(random_bytes(8));   //32 bytes for better security, I propably would like to create two tokens, one for user and one for database, 
    $token = random_bytes(32);             //hard to even brute force...         

    $url = "http://jachciarze.pl/create-new-password.php?selector=".$selector."&validator=".bin2hex($token);

    $expires = date("U") + 1800;        //expires in one hour
    
    require 'dbh.inc.php';

    $userEmail = $_POST["email"];
    $email = $userEmail;

    if (invalidEmail($email) == true) {             //checking if email is correctly typed
        header("location: ../odzyskiwanie.php?error=wrongEmail");        ///ERROR HANDLER
        exit();
    }
    else{
        if (emailNotExist($conn, $email) == true) {         //checking if user even exist to reset password
            header("location: ../logowanie.php?error=movedWrongly");        ///ERROR HANDLER
            exit();
        }
        else{
            $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";      //Delete any existing already token before creating new
            $stmt = mysqli_stmt_init($conn);        //prepared statement
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../odzyskiwanie.php?error=stmtemailE");        ///ERROR HANDLER
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $userEmail);       //tells that ?-mark above to what to change into (userEmail)
                mysqli_stmt_execute($stmt);
            }
    
    
    
            $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";   //creates row
            $stmt = mysqli_stmt_init($conn);        //prepared statement
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location: ../odzyskiwanie.php?error=stmtE6");        ///ERROR HANDLER
                exit();
            }
            else{
                $hashedToken = password_hash($token, PASSWORD_DEFAULT);     //hashing token
    
                mysqli_stmt_bind_param($stmt, "ssss", $userEmail,  $selector, $hashedToken, $expires);       //tells that ?-mark above to what to change into (userEmail, selector, hashedToken, expires)
                mysqli_stmt_execute($stmt);
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);                 //make sure to close any existing connections
    
    
            /////////////////////////// Sending Email ///////////////////////////
    
            $to = $userEmail;
    
            $subject = 'Reset your password for jachciarze.pl  /  Zresetuj swoje hasło dla witryny jachciarze.pl';
    
            $message = ' We recieved a password reset request. The link to reset your password is below. If you did not make this request, please ignore this email. Otrzymaliśmy prośbę o zresetowanie hasła. Link umożliwiający zmiane hasła znajduje się poniżej. Jeżeli jednak ta wiadomość jest przypadkowa, prosimy o zignorowanie jej. ';
            $message .= ' Here is your password reset link / Link do zresetowania hasła:    ';
            $message .= $url;
    
            
            $headers = "From / Od: jachciarze.pl <jachciarze@jachciarze.pl>\r\n";
            $headers .= "Reply-To / Odpowiedz do: jachciarze@jachciarze.pl\r\n";
    
            mail($to, $subject, $message, $headers);
    
    
    
            mail($to, $subject, $message, $headers);
    
            header("location: ../odzyskiwanie.php?error=emailsendsuccess");          ///ERROR HANDLER   
    
            /////////////////////////// Sending Email ///////////////////////////
        }
    }

    
}
else{
    header("location: ../odzyskiwanie.php?error=enteredWrongly");       ///ERROR HANDLER
}