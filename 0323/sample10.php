<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample.php</title>
</head>
<body>
    <!-- 久永先生の課題 -->
    <h3>0323</h3>
    <?php
    $a = intval($_POST['a']) ;
    if($a > 100){
        echo 'なわけあるかぁ!どたわけがぁ!!!';
    }elseif($a >= 80){
        echo '優 ええぞ！';
    }elseif($a >= 60){
        echo '良 まぁまぁやな！';
    }elseif($a >= 30){
        echo '可 しっかりせえ！';
    }else{
        echo '不可 たわけがぁ！';
    }
    ?>
</body>
</html>