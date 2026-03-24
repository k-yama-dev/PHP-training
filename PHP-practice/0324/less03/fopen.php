<h1>less03</h1>
<h3>p96 図5</h3>
<!-- p96 図5 -->
<?php
// データを読み込む
$fp = fopen('bookdata.csv','r');
var_dump($fp);
?>

<h3>p97 図9</h3>
<!-- p97 図9 -->
<?php
$fp = fopen('bookdata.csv','r');
if($fp === false){
    echo "ファイルのオープンに失敗しました...";
    exit;
}
var_dump($fp)
?>