<h3>p103 図2</h3>
<!-- p103 図2 -->
<?php
// データを読み込む
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました...";
    exit;
}
// 1行を処理する
$row = fgetcsv($fp);
var_dump($row);
?>

<h3>p104 図5</h3>
<!-- p104 図5 -->
<?php
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}
?>

<h3>p105 図7</h3>
<!-- p105 図7 -->
<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました...";
    exit;
}
// 1行ずつ出力する
while ($row = fgetcsv($fp)) {
    var_dump($row);
    echo '<br>';
}
?>

<h3>p107 図11</h3>
<!-- p107 図11 -->
<?php
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました...";
    exit;
}
// 書籍名と著者名を出力する
while ($row = fgetcsv($fp)) {
    echo "書籍名:" . $row[0] . "<br>";
    echo "著者名:" . $row[4] . "<br><br>";
}
?>

<h3>久永先生の課題:バカソートのwhile版を作れ</h3>
<ul>
<?php
    $array = [8,9,2,3];

    foreach($array as $value) : ?>
<li><?php echo $value; ?>&nbsp;</li> 
<?php endforeach;?>
</ul>

<?php 
$i =0;
while($i<count($array)-1){
    $j = $i+1;
    while($j<count($array)){
        if($array[$i]>$array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp; 
        }
        $j++;
    }
    $i++;
}
?>

<ul>
<?php foreach($array as $value) : ?>
<li><?php echo $value; ?>&nbsp;</li> 
<?php endforeach; ?>
</ul>