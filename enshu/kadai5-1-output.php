<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai5-1</title>
</head>
<body>
    <?php
    echo '入力されたパスワード：',$_POST['pass'], '<br>';
    echo 'ハッシュ値：',password_hash($_POST['pass'], PASSWORD_DEFAULT);
    ?>
</body>
</html>