<html>
<head>
    <meta charset="utf-8">
    <title>Hello Html</title>
</head>
<body bgcolor="lightgreen">
    <h1>基本資料</h1>
    <table width="900" border="1">
        <tr><td>姓名</td><td>Steven</td></tr>
        <tr><td>性別</td><td>男</td></tr>
        <tr><td>學院</td><td>資管系</td></tr>
    </table>

    <h2>報名表單</h2>
    <form action="info.php" method="post">
        場次：<input type="text" name="place"><br><br>
        姓名：<input type="text" name="name"><br><br>
        E-Mail：<input type="email" name="email"><br><br>
        連絡電話：<input type="tel" name="phone"><br><br>
        備註：<br>
        <textarea name="note" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="送出">
    </form>
</body>
</html>