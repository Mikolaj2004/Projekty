<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';


if(isset($_SESSION["userid"])){
    if(isset($_POST["submitbooking"])){

        $jachtName = $_GET["jachtName"];
        $bookingStart = $_POST["bookingStart"];
        $bookingEnd = $_POST["bookingEnd"];
        $userId = $_SESSION["userid"];
    
        
        emptyBooking($bookingStart, $bookingEnd);
        moreThanSecond($bookingStart, $bookingEnd);
        moreThanThree($conn, $userId);
        $jachtId = fetchrow($conn, $jachtName);

        if (bookTaken($conn, $jachtId, $bookingStart, $bookingEnd) !== false) {
            header("location: ../flota.php?error=alreadyBooked");
            exit();

        }
        sendBooking($conn, $jachtId, $userId, $bookingStart, $bookingEnd);

    }
}
else{
    header("location: ../logowanie.php?error=notLogged");
    exit();
}

