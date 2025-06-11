<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to NUK</title>
</head>
<body bgcolor="lightgreen">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <a href="form.php" target="new"><h2>點我填表單</h2></a><br>
    <img src="rick-astley-rick-roll.gif" width="900" border="1"><br><br>
    <a href="logout.php">登出</a>
</body>
</html>
