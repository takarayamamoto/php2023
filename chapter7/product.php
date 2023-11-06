<?php require 'header.php';?>
<?php require 'menu.php';?>
<form action="product.php" method="post">
    商品検索
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</from>
<hr>
<?php
echo '<table>';
echo '<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>';
$pdo=new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1517812-shop;charset=utf8','LAA1517812', 'Pass0404');
if(isset($_POST['keyword'])){
    $sql=$pdo->prepare('select * from product where name like ?');
    $sql->execute(['%'.$_POST['keyword'].'%']);
}else{
    $sql=$pdo->query('select * from product');
}
foreach($sql as $row){
    $id=$row['id'];
    echo '<tr>';
    echo '<td>',$id,'</td>';
    echo '<td>';
    echo '<a href="detail.php?id=',$id,'">',$row['name'],'</a>';
    echo '</td>';
    echo '<td>',$row['price'],'</td>';
    echo '</tr>';
}
echo '</table>';
?>
<?php require 'footer.php'; ?>