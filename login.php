<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body bgcolor="#E8D8F3" text="#190726">
    <h1>登入系統</h1>

    <?php
        if (isset($_COOKIE["username"])) {
            echo "<h3>Welcome back, " . htmlspecialchars($_COOKIE["username"]) . "</h3>";
        }
        echo "帳:Steven<br>";
        echo "密:123<br>";
    ?>

    <form action="logincheck.php" method="post">
        使用者帳號：<input type="text" name="username"><br>
        使用者密碼：<input type="password" name="password"><br>
        <input type="submit" value="登入">
    </form>

    <br>
    <?php 
        date_default_timezone_set('Asia/Taipei');
        echo "現在時間: " . time() . "<br>";
        echo "現在日期: " . date("Y年m月d日 H:i:s") . "<br>";
    ?>
</body>
</html>
