<?php
$title = "Update Confirmation";
include("includes/header.inc");
require_once("includes/db_connect.inc");
include("includes/nav.inc");


$error = false;
if (!empty($_POST['game_id'])) {

    foreach ($_POST as $key => $val) {
        $$key = trim($val);
    }
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    $sql = "select * from game where game_id=?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        exit("prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $game_id);
    $stmt->execute();
    $records = $stmt->get_result();
    if ($records->num_rows > 0) {
        foreach ($records as $row) {
            $name = $row['name'];
            $oldimage = $row['image'];
        }
    }
    if (empty($image)) {
        $image = $oldimage;
    }
    $sql = "UPDATE game SET category=?, description=?, year=?, price=?, image=? WHERE game_id=?";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        exit("prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssidsi", $category, $description, $year, $price, $image, $game_id);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "<p>Record $name updated<p>";

        if ($oldimage != $image) {
            //Delete old image
            if (file_exists('game_images/' . $oldimage)) {
                unlink('game_images/' . $oldimage);
            }
            //Upload new one
            if (move_uploaded_file($temp, 'game_images/' . $image)) {
                echo "Image moved to folder";
            } else {
                echo "Image not moved to folder";
            }
        }
    } else {
        $error = true;
    }
} else {
    $error = true;
}
if ($error) {
    echo "<p>Record NOT updated<p>";
}



include("includes/footer.inc");
