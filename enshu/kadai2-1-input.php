<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>復習2-1</title>
</head>
<body>
    <h1>今日の日付を選択してください</h1>
    <form action="kadai2-1-output.php" method="post">
        <select name="moon">
            <?php
            for($i=1;$i<=12;$i++){
                echo '<option value="',$i,'">',$i,'</option>';
            }
            echo '</select>';
            echo '月';
            echo '<select name="day">';
            for($i=1;$i<=31;$i++){
                echo '<option value="',$i,'">',$i,'</option>';
            }
            ?>
        </select>日
        <button type="submit">送信</button>
</body>
</html>