<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習2-3</title>
</head>
<body>
    <p>入場する人の区分を選択してください</p>
    <?php
        $kubun = ['未就学児','子供料金','小学生～高校生料金','大人料金','65歳以上'];
        echo '<form action="kadai2-3-output.php" method="post">';
        echo '<select name="kubu">';
        foreach($kubun as $c){
            echo '<option value="',$c,'">',$c,'</option>';
        }
        echo '</select>';
    ?>
    <button type="submit">確定</button>
</body>
</html>
