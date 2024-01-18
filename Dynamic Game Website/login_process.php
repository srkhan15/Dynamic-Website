<?php
session_start();


include("includes/db_connect.inc");


$sql = "select * from developer where developername = ? and password = SHA(?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $developername, $password);
$developername = $_POST['developername'];
$password = $_POST['password'];

$stmt->execute();

$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $_SESSION['usrmsg'] = "Login successfull";
    $_SESSION['developername'] = $developername;
} else {
    $_SESSION['err'] = "Login unsuccessfull";
}
$conn->close();
header("Location:index.php");
exit(0);
