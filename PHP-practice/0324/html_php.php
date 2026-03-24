<h3>p77 図3</h3>
<!-- p78 図5 -->
<?php
echo "<html>" . PHP_EOL;
echo "<body>" . PHP_EOL;
echo "<p>" . PHP_EOL;
echo "こんにちは!" . PHP_EOL;
echo "</p>" . PHP_EOL;
echo "</body>" . PHP_EOL;
echo "</html>" . PHP_EOL;
?>

<h3>p78 図5</h3>
<!-- p78 図5 -->
<html>
<body>
    <?php
    $count = 0;
    if ($count === 0) {
        echo "<p>はじめまして</p>" . PHP_EOL;
    } else {
        echo "<p>いつもありがとうございます</p>" . PHP_EOL;
    }
    ?>
</body>
</html>

<h3>p78 図7</h3>
<!-- p78 図7 -->
<html>
<body>
    <?php if($count === 0):?>
        <p>はじめまして</p>
    <?php else: ?>
        <p>いつもありがとうございます</p>
    <?php endif; ?>
</body>
</html>

<h3>p79 図10</h3>
<!-- p79 図10 -->
 <?php 
 $name = [
    '1' => '佐藤',
    '2' => '鈴木',
    '3' => '高橋'
 ];
 
 foreach($name as $key => $value):?>
 <p><?php echo $key; ?>人目は<?php echo $value; ?>さんでず</p>
 <?php endforeach; ?>

 <h3>久永先生の課題：バカソート</h3>
 <!-- $array 8,9,2,4を初期化してバカソート前とバカソート後を
  出力するプログラムを作る。出力は：を使う形で -->
<?php
$array = [8,9,2,3];
for($i = 0;$i < 4;$i++){
    for($j = $i+1;$j < 4;$j++){
        if($array[$i] > $array[$j]){
            $x = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $x;
        }
    }
}   
 ?>
<ul>
    <?php foreach($array as $value): ?>
    <li><?php echo $value; ?>&nbsp;</li>
    <?php endforeach; ?>
</ul>