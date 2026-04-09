<?php
$counter = 0;
$counter ++;
echo $counter; //(1)
echo $counter++; //(2)
echo $counter; //(3)
echo ++$counter; //(4)
echo '<br>';
$counterA = 0; //0を
echo ++ $counterA; //インクリメントしてから値を返すので、１
echo $counterA; //1
echo '<br>';
$counterB = 0; //0を
echo $counterB++; //値を返してからインクリメントするので、０
echo $counterB; //1
?>