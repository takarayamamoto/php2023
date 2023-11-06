<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習2-6</title>
</head>
<body>
    <p>賛成のメンバーを選択</p>
    <?php
        $kubun = ['織田信長','上杉謙信','伊達政宗','徳川家康','豊臣秀吉','武田信玄','明智光秀'];
        echo '<form action="kadai2-6-output.php" method="post">';
        foreach($kubun as $c){
            echo '<input type="checkbox" name="kubun[]" value="',$c,'">',$c,'<br>';
        }
    ?><br>
    <button type="submit">投票結果</button>
</body>
</html>