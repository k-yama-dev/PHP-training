<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fu*ktion</title>
</head>

<body>
    <h3>p86 図7</h3>
    <!-- p86 図7 -->
    <?php
    $a = "abcdefg";
    $b = strlen($a);
    echo $b;
    ?>
    <h3>p87 図11</h3>
    <!-- p87 図11 -->
    <?php 
    function tax($price){
        echo $price *1.1;
    }
    tax(100);
    echo "<h3>"."p88 図14"."</h3>";
    // p88 図14
    $a = 100;
    tax($a);
    ?>
    <h3>p89 図16</h3>
    <!-- p89 図1 -->
    <?php 
    function tax1($price1){
        return $price1 * 1.1;
    }
    $sample_price = tax1(100);
    echo '消費税込みの値段:'.$sample_price.'円やで';
     ?>

     <h3>p90 図20 型宣言(関数)int</h3>
    <!-- p90 図20 -->
    <?php 
    function tx(int $price2){
        return $price2 * 1.1;
    }
    $sample_price = tx(100);
    echo '消費税込みの値段:'.$sample_price.'円やで';
     ?>

     <h3>p91 図21 型宣言(返り値 :float)</h3>
    <!-- p91 図21 -->
    <?php 
    function tqx(int $price2):float{
        return $price2 * 1.1;
    }
    $sample_price = tqx(111);
    echo '消費税込みの値段:'.$sample_price.'円やで';
     ?>


     <h3>p88 図18</h3>
     <!-- p88 図1 -->
    <?php
    $sample_price = tax1('文字列');
    echo '消費税込みの値段:'.$sample_price.'円やで';
    ?>

</body>

</html>