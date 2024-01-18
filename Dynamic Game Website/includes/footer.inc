<footer><br>&copy;Saif s3668321 2022</footer>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <ul class="navbar-nav">
        <?php
        $sql = "select distinct developername from developer";
        include("includes/db_connect.inc");
        $result = $conn->query($sql);
        while ($row = $result->fetch_array()) {
            print "<li class='nav-item active'>";
            print "<a class='nav-link' href='developer.php?developername=" . urlencode($row['developername']) . "'>{$row['developername']}</a>";
            print "</li>";
        }
        ?>
    </ul>
</nav>


</body>

</html>