<html>
<head>
    <meta charset="utf-8">
    <title>報名成功</title>
</head>
<body bgcolor="#F2D6EF" text="#2C0728">
    <h1>報名成功！</h1>
    以下是你的報名資訊<br>
    <?php
        echo "場次：" . htmlspecialchars($_POST["place"]) . "<br>";
        echo "姓名：" . htmlspecialchars($_POST["name"]) . "<br>";
        echo "E-Mail：" . htmlspecialchars($_POST["email"]) . "<br>";
        echo "連絡電話：" . htmlspecialchars($_POST["phone"]) . "<br>";
        echo "備註：<pre>" . nl2br(strip_tags($_POST["note"])) . "</pre>";
    ?>
    <br>
    我們期望到時見到您，謝謝！<br>
</body>
</html>
