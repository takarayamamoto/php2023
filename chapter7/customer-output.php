<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php';?>
<?php
$pdo=new PDO('mysql:host=mysql215.phy.lolipop.lan;dbname=LAA1517812-shop;charset=utf8','LAA1517812', 'Pass0404');
if(isset($_SESSION['customer'])){
    $id=$_SESSION['customer']['id'];
    $sql=$pdo->prepare('select * from customer where id!=? and login=?');
    $sql->execute([$id,$_POST['login']]);
}else{
    $sql=$pdo->prepare('select * from customer where login=?');
    $sql->execute([$_POST['login']]);
}
if(empty($sql->fetchall())){
    if(isset($_SESSION['customer'])){
        $sql=$pdo->prepare('update customer set name=?,address=?,'.'login=?,password=? where id=?');
        $sql->execute([$_POST['name'],$_POST['address'],$_POST['login'],password_hash($_POST['password'], PASSWORD_DEFAULT),$id]);
        $_SESSION['customer']=[
            'id'=>$id,'name'=>$_POST['name'],
            'address'=>$_POST['address'],'login'=>$_POST['login'],
            'password'=>$_POST['password']
        ];
        echo 'お客様情報を更新しました。';
    }else{
        $sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
        $sql->execute([$_POST['name'],$_POST['address'],$_POST['login'],password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        echo 'お客様情報を登録しました。';
    }
}else{
    echo 'ログイン名がすでに使用されていますので、変更してください。';
}
?>
<?php require 'footer.php';?>