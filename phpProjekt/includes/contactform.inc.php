<?php

include_once('functions.inc.php');

if (isset($_POST['submitcontact'])) {
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $mailTo = "jachciarze@jachciarze.pl";
    $headers = "From: ".$mail;
    $txt = "Otrzymaliśmy email od ".$mail.".\n\n".$message;


    if (emptyInputContact($mail, $subject, $message) !== false) {
        header("location: ../kontakt.php?error=emptyinput");
        exit();
    }
    elseif (invalidEmail($mail) !== false) {
        header("location: ../kontakt.php?error=invalidemail");
        exit();
    }
    else{
        mail($mailTo, $subject, $txt, $headers);
        header("location: ../kontakt.php?error=none");
        exit();
    }

   
}
else{
    header("location: ../logowanie.php?error=notLogged");
    exit();
}



////////    Pozdrawiam Czytającego M.W.   ZROBIC ERROR HANDLERY, DOPIERO W FTP NA CBA  - 27.10.2021 02:37 zrobione  /////////////
