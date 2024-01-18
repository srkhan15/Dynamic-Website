<?php

include("includes/db_connect.inc");


$sql = "insert into developer (developername, password, reg_date) values (?, SHA(?), now())";
$developername = $_POST['developername'];
$password = $_POST['password'];

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $developername, $password);

$stmt->execute();
session_start();
if ($stmt->affected_rows > 0) {
    //back to home
    $_SESSION['usrmsg'] =  "You have successfully registered";
} else {
    $_SESSION['err'] =  "An error has occured!";
}
$conn->close();
header("Location:index.php");
exit(0);
