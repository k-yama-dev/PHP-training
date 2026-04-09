<?php
echo '1.';
$age = 18;
if($age >= 20){
    echo '<br>飲酒OK!<br>';
}else{
    echo '<br>';
}

echo '<br>2.';
$age2 = 18;
if($age2 >= 18){
    echo '<br>成人!<br>';
    if($age2 >= 20){
        echo '飲酒おk!';
    }
}

echo '3.';
$age3 = 18;
if($age3 >= 20){
    echo '<br>飲酒OK!<br>';
}elseif($age3 >= 18){
    echo '成人';
}
echo '<br>条件式を書きたいときはelseの中じゃなくてelsifを使う<br>';

echo '4.';
$age4 = 18;
if($age4){
    echo '<br>何歳?<br>';
}

echo 'if-elseif<br>';
$age5 = 18;
if($age5 % 2 === 0){
    echo '2の倍数<br>';
}elseif($age5 % 3 === 0){
    echo '3の倍数<br>';
}
echo 'if-if<br>';
$age5 = 18;
if($age5 % 2 === 0){
    echo '2の倍数<br>';
}
if($age5 % 3 === 0){
    echo '3の倍数<br>';
}


?>