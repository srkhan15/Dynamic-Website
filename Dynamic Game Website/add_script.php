<?php

include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");

foreach ($_POST as $key => $val) {
    $$key = trim($val);
}
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

$sql = "INSERT INTO game (name, category, description, year, price, image, developername) Values(?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssiiss", $name, $category, $description, $year, $price, $image, $developername);

$stmt->execute();


if ($stmt->affected_rows > 0) {
    echo '<p>Image Uploaded</p>';
    if (move_uploaded_file($temp, 'game_images/' . $image))
        echo "<p>Image moved to folder</p>";
}


include("includes/footer.inc");
