<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習2-4</title>
</head>
<body>
<?php
    $kubun = [
        '未就学児'=>0,
        '子供料金'=>500,
        '小学生～高校生'=>700,
        '大人料金'=>1000,
        '65歳以上'=>600
        ];
    foreach($kubun as $key => $value){
        echo $key,'は',$value,'円です<br>';
    }
?>
</body>
</html>