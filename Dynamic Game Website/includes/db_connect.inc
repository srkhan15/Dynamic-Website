<?php
//db_connect.inc
//Check what server you are accessing
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
    $servername = "######";
    $username = "#######";
    $password = "";
    $dbname = "#######";
} else {
    $servername = "Taken out for privacy";
    //change to your own student number
    $username = "#####";
    //change to your own Jacob 5 password
    //NOT your RMIT password
    $password = "######";
    //change to your own student number
    $dbname = "########";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
