<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題1-7input</title>
</head>
<body>
    <form action="kadai1-7-output.php" method="post">
        <input type="radio" name="mail" value="ne1" checked>未就学児<br>
        <input type="radio" name="mail" value="ne2">子供料金<br>
        <input type="radio" name="mail" value="ne3">小学生～高校生料金<br>
        <input type="radio" name="mail" value="ne4">大人料金<br>
        <input type="radio" name="mail" value="ne5">65歳以上<br>
        <input type="checkbox" name="doni">土日祝日<br>
        <input type="checkbox" name="tyou">長期休暇期間<br>
        <button type="submit">料金計算</button>
    </form>
</body>
</html>