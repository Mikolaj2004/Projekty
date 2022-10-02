<?php
session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';



if (isset($_POST["submit"])) {

    
    $newEmail = $_POST["zEmail"];
    $newNumPatent = $_POST["zPatent"];
    $Pwd = $_POST["zpwd"];
    $useruid = $_SESSION["useruid"];

    if (emptyDaneField($newEmail, $newNumPatent, $Pwd) !== false) {
        header("location: ../dane.php?error=emptyinput");
        exit();
    }
    else{
    newDane($conn, $newEmail, $newNumPatent, $Pwd, $useruid);
    header("location: ../dane.php?error=changedone");
    }

    }
else{
    header("location: ../logowanie.php?error=movedWrongly");
}