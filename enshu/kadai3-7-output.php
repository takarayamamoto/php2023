<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習3-7</title>
</head>
<body>
    <table>
        <tr><th>商品番号</th><th>商品名</th><th>カテゴリー</th><th>価格</th></tr>
        <?php
        $pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1517812-shop;charset=utf8','LAA1517812', 'Pass0404');
        $sql=$pdo->prepare('select * from item where name like ?');
        $sql->execute(['%'.$_POST['keyword'].'%']);
        if(empty($sql->fetchall())){
            echo 'データが1件もありません。';
        }else{
            foreach($sql as $row){
                echo '<tr>';
                echo '<td>',$row['id'],'</td>';
                echo '<td>',$row['name'],'</td>';
                echo '<td>',$row['kubun'],'</td>';
                echo '<td>',$row['price'],'</td>';
                echo '</tr>';
                echo "\n";
            }
        }
        ?>
    </table>
    </body>
</html>