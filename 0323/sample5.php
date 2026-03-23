<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample.php</title>
</head>
<body>
    <!-- p50 図20 -->
    <h3>0323</h3>
    <?php
    $a = $_POST['a'];
    if ($a === '1'){
        echo 'aは1でせ if!';
    }elseif($a === '2'){
        echo 'aは2でせ elseif!';
    }else{
        echo 'aは1でも2でもありませ else!!!';
    }
    ?>
</body>
</html>