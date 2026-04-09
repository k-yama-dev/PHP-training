<?php
$counter = 0;
$counter ++;
echo $counter; //(1)
echo $counter++; //(2)
echo $counter; //(3)
echo ++$counter; //(4)
echo '<br>';
$counterA = 0; //0を
++ $counterA; //インクリメントすれば
echo $counterA; //1
echo '<br>';
$counterB = 0; //0を
++ $counterB; //インクリメントすれば
echo $counterB; //1
?>