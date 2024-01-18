<?php
$title = "details";
include("includes/header.inc");
include("includes/nav.inc");
?>





<main>
    <?php



    if (!empty($_GET['id'])) {
        include("includes/db_connect.inc");


        $game_id = $_GET['id'];

        $sql = "SELECT * FROM `game` WHERE game_id = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("i", $game_id);

        $game_id = $_GET['id'];

        $stmt->execute();

        $result = $stmt->get_result();
        print "<div class=container>";
        print "<div class=row>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                print "<div class=col-sm-6 col-md-6 col>";
                print "<h2>{$row['name']}</h2>";
                print "<h4>Category - {$row['category']}</h4>";

                print "<h5>{$row['description']}</h5>";
                print "<h4>Year - {$row['year']}</h4>";
                print "<h4>Price - {$row['price']}</h4>";

                print "<img src='game_images/{$row['image']}' width='450' height='350'>";
                print "</div>";
            }
        }
    }
    print "</div>";
    print "</div>";
    ?>
    <?php if (isset($_SESSION['developername'])) {
        echo "<td><a href='edit.php'>Edit</a></td>";
    } ?>
</main>
<?php

$conn->close();
include("includes/footer.inc");
?>