<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample.php</title>
</head>
<body>
    <!-- p51 図20 -->
    <h3>0323</h3>
    <?php
    $a = $_POST['a'];
    if ($a === 'A'){
        echo 'aはAでせ if !';
    }elseif($a === 'B'){
        echo 'aはBでせ elseif 1!';
    }elseif($a === 'O'){
        echo 'aはOでせ elseif 2!';
    }elseif($a === 'AB'){
        echo 'aはABでせ elseif 3!';
    }else{
        echo 'aは大文字でいれて else !!!';
    }
    ?>
</body>
</html>