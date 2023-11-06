<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題1-4output</title>
</head>
<body>
    <?php
    if(isset($_POST['red'])){
        echo '赤：選択<br>';
    }else{
        echo '赤：未選択<br>';
    }
    if(isset($_POST['blue'])){
        echo '青：選択<br>';
    }else{
        echo '青：未選択<br>';
    }
    if(isset($_POST['green'])){
        echo '緑：選択<br>';
    }else{
        echo '緑：未選択<br>';
    }
    ?>
</body>
</html>