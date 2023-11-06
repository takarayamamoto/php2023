<?php
$pdo = new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1517812-shop;charset=utf8','LAA1517812', 'Pass0404');
$sql=$pdo->query('select * from product');
foreach($sql as $row){
    $data[]=$row;
}
echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>