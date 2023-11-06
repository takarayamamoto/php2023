<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習2-5</title>
</head>
<body>
    <p>入場する人の区分を選択してください</p>
    <?php
        $kubun = [
            '未就学児'=>0,
            '子供料金'=>500,
            '小学生～高校生'=>700,
            '大人料金'=>1000,
            '65歳以上'=>600
        ];
        echo '<form action="kadai2-5-output.php" method="post">';
        echo '<select name="kubu">';
        foreach($kubun as $key=>$value){
            echo '<option value="',$value,'">',$key,'</option>';
        }
        echo '</select><br><br>';
    ?>
    <button type="submit">確定</button>
</body>
</html>
