<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題1-7output</title>
</head>
<body>
    <?php
    if(isset($_POST['tyou'])&&isset($_POST['doni'])){
        switch($_POST['mail']){
            case 'ne1':
                echo 'ご来場ありがとうございます！料金は0円です';
                break;
            case 'ne2':
                echo 'ご来場ありがとうございます！料金は350円です';
                break;
            case 'ne3':
                echo 'ご来場ありがとうございます！料金は450円です';
                break;
            case 'ne4':
                echo 'ご来場ありがとうございます！料金は1100円です';
                break;
            case 'ne5':
                echo 'ご来場ありがとうございます！料金は700円です';
                break;
        }
    }elseif(isset($_POST['doni'])){
        switch($_POST['mail']){
            case 'ne1':
                echo 'ご来場ありがとうございます！料金は0円です';
                break;
            case 'ne2':
                echo 'ご来場ありがとうございます！料金は600円です';
                break;
            case 'ne3':
                echo 'ご来場ありがとうございます！料金は800円です';
                break;
            case 'ne4':
                echo 'ご来場ありがとうございます！料金は1100円です';
                break;
            case 'ne5':
                echo 'ご来場ありがとうございます！料金は700円です';
                break;
        }
    }elseif(isset($_POST['tyou'])){
        switch($_POST['mail']){
            case 'ne1':
                echo 'ご来場ありがとうございます！料金は0円です';
                break;
            case 'ne2':
                echo 'ご来場ありがとうございます！料金は250円です';
                break;
            case 'ne3':
                echo 'ご来場ありがとうございます！料金は350円です';
                break;
            case 'ne4':
                echo 'ご来場ありがとうございます！料金は1000円です';
                break;
            case 'ne5':
                echo 'ご来場ありがとうございます！料金は600円です';
                break;
        }
    }else{
        switch($_POST['mail']){
            case 'ne1':
                echo 'ご来場ありがとうございます！料金は0円です';
                break;
            case 'ne2':
                echo 'ご来場ありがとうございます！料金は500円です';
                break;
            case 'ne3':
                echo 'ご来場ありがとうございます！料金は700円です';
                break;
            case 'ne4':
                echo 'ご来場ありがとうございます！料金は1000円です';
                break;
            case 'ne5':
                echo 'ご来場ありがとうございます！料金は600円です';
                break;
        }
    }
    ?>
</body>
</html>