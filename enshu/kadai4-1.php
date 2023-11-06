<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>復習4-1</title>
</head>
<body>
<?php
$sesstion_id=session_id();
echo '現在のセッションで使用しているセッションID：',$sesstion_id; 
?>
</body>
</html>