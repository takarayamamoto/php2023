<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習4-2</title>
</head>
<body>
<?php
$sesstion_id=session_id();
echo 'セッションが開始されると、ブラウザにセッション名でセッションIDが保存されます。<br>';
echo '保存されるセッション名：',session_name(),'<br>';
echo '保存されるセッションID：',$sesstion_id; 
?>
</body>
</html>