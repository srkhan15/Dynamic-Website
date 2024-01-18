<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="games.php">Games</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
        </li>
        <?php if (isset($_SESSION['developername'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="add.php">Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="register_form.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login_form.php">Login</a>
            </li>
        <?php } ?>
    </ul>
</nav>
<?php
if (isset($_SESSION['usrmsg'])) {
    print $_SESSION['usrmsg'] . '<br>';
    unset($_SESSION['usrmsg']);
}
if (isset($_SESSION['err'])) {
    print $_SESSION['err'] . '<br>';
    unset($_SESSION['err']);
}
?>