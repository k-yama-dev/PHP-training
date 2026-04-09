<?php
$pID = 'ABC';
$pcA = 5000;
$PM = true;
echo 'ネスト入りすぎif文<br>';
if($pID == 'ABC'){
    if($pcA >= 3000){
        if($PM){
            echo '特別割引が適用されます<br>';
        }
    }
}else{
    echo '通常料金です<br>';
}

echo 'すっきりif文<br>';
if($pID == 'ABC' && $pcA >= 3000 && $PM){
    echo 'すっきり特別割引適用させていただきます<br>';
}else{
    echo '通常料金ですスッキリさせたのに<br>';
}


?>