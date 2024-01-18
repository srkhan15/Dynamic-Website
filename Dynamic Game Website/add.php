<?php
include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");
?>

<main>
    <h2>Add Game</h2>
    <?php if (isset($_SESSION['developername'])) { ?>
        <form action="add_script.php" method="post" enctype="multipart/form-data">
            <label>Name</label>
            <input type="text" name="name" />
            <br><br>
            <label>Category</label>
            <input type="text" name="category" />
            <br><br>
            <label>Description</label>
            <textarea cols="50" rows="5" name="description"></textarea>
            <br><br>
            <label>Year</label>
            <input type="text" name="year" />
            <br><br>
            <label>Price:</label>
            <input type="text" name="price" />
            <br><br>
            <label>Image Upload</label>
            <input type="file" name="image" /><br><br>
            <label>Developer Name</label>
            <input type="text" name="developername" /><br><br>
            <input type="submit" name="submit" value="Submit" />
        </form>
    <?php
    } else {
        $_SESSION['err'] = "Login required to add a new game";
    }
    ?>
    <?php
    include("includes/footer.inc");
    ?>
</main>