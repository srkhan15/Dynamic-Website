<?php
$title = "Register";
include("includes/header.inc");
include("includes/db_connect.inc");
include("includes/nav.inc");
?>
<h2>Register Page</h2>

<form action="register_process.php" method="post">
    <div class="form-group">
        <label for="developername">Username:</label>
        <input type="text" name="developername" id="developername" placeholder="Enter username"><br><br>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Password"><br><br>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <input type="submit" value="Login">
</form>
<?php
include("includes/footer.inc");
?>