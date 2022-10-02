<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {
    
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../logowanie.php?error=emptylogininput");
        exit();
    }

    loginUser($conn, $username, $pwd);
    }
    else{
        header("location: ../logowanie.php");
        exit();
    } 