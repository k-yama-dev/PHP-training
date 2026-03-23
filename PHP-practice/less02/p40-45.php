<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>傘がない</title>
</head>
<body>
    <?php
    $condition = true;
    if($condition) echo "条件はtrueです!";
    ?>
<br>
    <?php
    $condition = false;
    // 出力されなければfalseです!
    if($condition) echo "条件はtrueです!";
    ?>
<br>
    <?php
    $a = 1;
    if($a === 1){
        echo "aは1です!";
    }
    ?>
<br>
    <?php
    $a = 2;
    if($a === 1){
        echo "aは1です!";
    }
    ?>
<br>
    <?php
    $a = 1;
    $b = 2;
    if($a < $b){
        echo "aはbよりも小さいです!";
    }
    ?>
<br>
    <?php
    $a = 1;
    $b = 2;
    if($a <=> $b){
        echo "UFOです!";
        echo '$a<=>$b'.($a<=>$b);
    }
    ?>

</body>
</html>