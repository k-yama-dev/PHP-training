<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample.php</title>
</head>
<body>
    <!-- 久永先生の課題 1からスタート、3，5，7のように100までの数値を出力 -->
    <h3>0323</h3>
    <?php
    for($i = 1; $i<=100; $i+=2){
        echo $i."<br>";
    }
    ?>
</body>
</html>