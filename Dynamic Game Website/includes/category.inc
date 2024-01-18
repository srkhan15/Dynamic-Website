<div>
    <form>
        <select id="menu" onchange="navigate();">
            <option value="#">Select category...</option>
            <option value="gallery.php">No Category</option>
            <?php
            include("includes/db_connect.inc");
            $sql = "select distinct category from game";
            $result = $conn->query($sql);

            while ($row = $result->fetch_array()) {
                print "<option value='category.php?category=" . urlencode($row['category']) . "'>{$row['category']}</option>";
            }
            ?>
        </select>
    </form>
</div>