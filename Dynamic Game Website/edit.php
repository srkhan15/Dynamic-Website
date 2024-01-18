<?php

include("includes/header.inc");
require_once("includes/db_connect.inc");
include("includes/nav.inc");

$sql = "select game_id, name, image from game";
$results = $conn->query($sql);
?>

<table class="table table-striped">
    <tr>

        <th>Name</th>
        <th>Image</th>
        <th colspan="2">Make Changes</th>
    </tr>
    <?php if (isset($_SESSION['developername'])) { ?>
        <?php
        print "<div class=container>";
        foreach ($results as $row) {

            echo "<tr>";

            echo "<td>{$row['name']}</td>";
            echo "<td><img class='thumb' src='game_images/{$row['image']}' style=width:60% alt='{$row['name']}'></td>";
            echo "<td><a class='link' href='edit_form.php?id={$row['game_id']}'><button type='button' class='btn btn-primary'>Update</button></a></td>";
            echo "<td><a class='link' href='delete_form.php?id={$row['game_id']}' ><button type='button' class='btn btn-danger'>Delete</button></a></td>";
            echo "</tr>";
        }
        print "</div>";
        ?>
</table>
<?php
    } else {
        $_SESSION['err'] = "Login required to edit game";
    }
?>
<?php
include("includes/footer.inc");
?>