<h3>p81,82 図4,5,6</h3>
<!-- p81,82 図4,5,6 -->
<?php 
require_once 'data.php';
var_dump($people);
?>

<h3>p83 図7</h3>
<!-- p83 図7 -->
<?php 
require_once 'data.php';
foreach($people as $key => $person){
    echo '名前は'.$person['name'].'やで<br>';
}
?>