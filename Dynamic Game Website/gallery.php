<?php
$title = 'Game';
include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");
include("includes/category.inc");
?>



<main>
    <?php
    $sql = "select * from game";
    $result = $conn->query($sql);
    print "<div class=container>";
    print "<div class=row>";

    while ($row = $result->fetch_array()) {
        print "<div class=col-sm-6 col-md-6 col>";
        echo "<a href='game.php?id={$row['game_id']}'>
    <img src='game_images/{$row['image']}' style=width:80%>
    </a>";
        print "</div>";
    }
    print "</div>";
    print "</div>";
    ?>
</main>
<?php
include("includes/footer.inc");
?>