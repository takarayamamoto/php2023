<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>復習2-6</title>
</head>
<body>
    <?php
    echo '賛成のメンバー：';
    $i=0;
    foreach($_REQUEST['kubun'] as $c){
        echo $c,'、';
        $i=$i+1;
    }
    echo '<br><br>';
    if($i<4){
        echo '反対多数';
    }else{
        echo '賛成多数';
    }
    ?>
</body>
</html>