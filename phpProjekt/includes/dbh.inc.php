<?php

$serverName = "mysql.cba.pl";          //mysql.cba.pl
$dBUsername = "projectz";              //projectz
$dBPassword = "Kolbron2137";           //Kolbron2137
$dBName = "jachciarze";                //jachciarze

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);         //connection with a database

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";


if (!$conn)  {
    die("Connection failed: ".mysqli_connect_error());
} 					