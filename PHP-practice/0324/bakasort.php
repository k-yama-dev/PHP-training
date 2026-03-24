<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            display: flex;
            list-style: none;
        }
    </style>
</head>
<body>
<ul>
<?php
    $array = [8,9,2,3];

    foreach($array as $value) : ?>
<li><?php echo $value; ?>&nbsp;</li> 
<?php endforeach;?>
</ul>
<?php for($i = 0; $i < (4-1); $i++) {
        for($j = $i+1; $j < 4; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
?>
<ul>
<?php foreach($array as $value) : ?>
<li><?php echo $value; ?>&nbsp;</li> 
<?php endforeach; ?>
</ul>
</body>
</html>