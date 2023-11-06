<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習3-2</title>
</head>
<body>
    <h1>検索結果</h1>
<table>
    <tr>
    <th>商品番号</th><th>商品名</th><th>カテゴリー</th>
    <th>商品価格</th>
    </tr>
<?php
    $pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1517812-shop;charset=utf8','LAA1517812', 'Pass0404');
    $pdo->query('select * from item');
    foreach($pdo->query('select * from item') as $row){
        echo '<tr>';
        echo '<td>',$row['id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['kubun'],'</td>';
        echo '<td>',$row['price'],'</td>';
        echo '</tr>';
    }
?> 
</table>
</body>
</html>