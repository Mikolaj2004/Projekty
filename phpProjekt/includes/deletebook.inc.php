<?php
session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';


$userid = $_SESSION["userid"];
$bookid = $_GET["bookid"];

if(isset($_SESSION["userid"])){
    deletebook($conn, $bookid);
}
else{
    header("location: ../logowanie.php?error=notLogged");
    exit();
}