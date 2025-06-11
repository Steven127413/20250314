<?php
session_start();

$host = "localhost";
$dbname = "school";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM students WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($student) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $student["username"];
        $_SESSION["name"] = $student["name"];
        setcookie("username", $student["username"], time() + 60);
        header("Location: index.php");
        exit;
    } else {
        echo "登入失敗，2 秒後返回登入頁";
        header("Refresh:2;url=login.php");
        exit;
    }

} catch (PDOException $e) {
    echo "資料庫錯誤：" . $e->getMessage();
}
?>

