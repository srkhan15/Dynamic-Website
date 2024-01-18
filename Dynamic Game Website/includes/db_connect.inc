<?php
//db_connect.inc
//Check what server you are accessing
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gameshop";
} else {
    $servername = "talsprddb02.int.its.rmit.edu.au";
    //change to your own student number
    $username = "s3668321";
    //change to your own Jacob 5 password
    //NOT your RMIT password
    $password = "Rmit12345";
    //change to your own student number
    $dbname = "s3668321";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
