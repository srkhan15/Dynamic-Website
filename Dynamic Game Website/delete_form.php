<?php
require_once("includes/db_connect.inc");
$title = "Delete Confirmation";
include("includes/header.inc");
include("includes/nav.inc");

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from game where game_id=?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        exit("prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $records = $stmt->get_result();
    if ($records->num_rows > 0) {
        foreach ($records as $row) {

            echo "<h2>Are you sure you want to delete this record?</h2>";
            print "<h2>{$row['name']}</h2>";
            print "<h4>Category - {$row['category']}</h4>";
            print "<h5>{$row['description']}</h5>";
            print "<h4>Year - {$row['year']}</h4>";
            print "<h4>Price - {$row['price']}</h4>";
            print "<div class='row'>";
            print "<div class='column'>";
            print "<img src='game_images/{$row['image']}' width='450' height='350' class='delete-img'>";
            print "</div>";
            print "</div>";
            echo "<p class='confirm'>";
            echo "<a href='edit.php'>Cancel</a>";
            // encode url to make html valid
            $imagename = urldecode("game_images/{$row['image']}");
            print "<br>";
            echo "<a onclick='myconfirm()' href='delete_script.php?id={$row['game_id']}'>Delete</a>";
            echo "</p>";
            echo '</div>';
        }
    }
}

include("includes/footer.inc");
