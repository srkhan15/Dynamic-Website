<?php
require_once("includes/db_connect.inc");
$title = "Update Form";
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
    foreach ($records as $row) {
?>
        <?php if (isset($_SESSION['developername'])) { ?>
            <form method="post" action="edit_process.php" enctype="multipart/form-data">
                <h3>Edit Game details: <?php echo $row['name'] ?> </h3>
                <input type="hidden" name="game_id" value="<?php echo $row['game_id'] ?>" />
                <br><br>
                <label>Category</label>
                <input type="text" name="category" value="<?php echo $row['category'] ?>">
                <br><br>
                <label>Description</label>
                <textarea cols="50" rows="10" name="description"><?php echo $row['description'] ?></textarea>
                <br><br>
                <label>Year</label>
                <input type="number" name="year" value="<?php echo $row['year'] ?>">
                <br><br>
                <label>Price</label>
                <input type="number" name="price" value="<?php echo $row['price'] ?>">
                <br><br>
                <input type="file" name="image"><span><?php echo $row['image'] ?></span>
                <br><br>
                <input type="submit" name="submit" value="Update" />

            </form>
        <?php
        } else {
            $_SESSION['err'] = "Login required to edit game";
        }
        ?>
<?php
    }
}
include("includes/footer.inc");

?>