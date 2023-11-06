<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai5-2</title>
</head>
<body>
    <?php
    $pass=password_hash(12345, PASSWORD_DEFAULT);
    if(password_verify($_POST['pass'],$pass)==true){
        echo '保存されているパスワードと一致しました';
    }else{
        echo '保存されているパスワードと一致しません';
    }
    ?>
</body>
</html>