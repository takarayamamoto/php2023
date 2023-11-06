<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php';?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1517812-shop;charset=utf8','LAA1517812', 'Pass0404');
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_REQUEST['login'],$_REQUEST['password']]);
foreach($sql as $row){
    $_SESSION['customer']=[
        'id'=>$row['id'],'name'=>$row['name'],
        'address'=>$row['address'],'login'=>$row['login'],
        'password'=>$row['password']];
}
/*foreach($sql as $row){
    if(password_verify($_REQUEST['password'],$row['password'])==true){
        echo 'いらっしゃいませ、',$_SESSION['customer']['name'],'さん。';
    }else{
        echo 'ログイン名またはパスワードが違います。';
    }
}*/
if(isset($_SESSION['customer'])){
    echo 'いらっしゃいませ、',$_SESSION['customer']['name'],'さん。';
}else{
    echo 'ログイン名またはパスワードが違います。';
}
?>
<?php require 'footer.php';?>