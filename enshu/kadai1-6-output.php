<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題1-6output</title>
</head>
<body>
    <?php
    if(empty($_POST['mei'])){
        echo 'ログイン名が入力されていません';
    }elseif(empty($_POST['pass'])){
        echo 'パスワードが入力されていません';
    }elseif($_POST['mei']=="admin"&&$_POST['pass']=="1234"){
        echo $_POST['mei'], 'さん、ようこそ！';
    }else{
        echo 'ログイン名かパスワードが間違っています';
    }
    ?>
</body>
</html>