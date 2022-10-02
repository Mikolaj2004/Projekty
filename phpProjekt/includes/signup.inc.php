<?php
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $numPatent = $_POST["numPatent"];
    $birthday = $_POST["birthday"]; 
    $statute = $_POST["statute"];

   

    if (emptyInputSignup($name, $surname, $email, $username, $pwd, $pwdRepeat, $numPatent, $birthday) !== false) {
        header("location: ../rejestracja.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../rejestracja.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../rejestracja.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../rejestracja.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../rejestracja.php?error=usernametaken");
        exit();
    }

    //Extra error handlers - Ekstra zabezpieczenia przeciw-głupocie

    if (statuteCheck($statute) !== false) {
        header("location: ../rejestracja.php?error=statutenotmarked");
        exit();
    }

    //


    createUser($conn, $name, $surname, $email, $username, $pwd, $numPatent, $birthday);
}
else{
    header("location: ../rejestracja.php");
    exit();
}