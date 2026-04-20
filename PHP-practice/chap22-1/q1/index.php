<?php
echo date('1 day ago');//1
echo "<br>";

// echo date('Y-m-d','yesterday');//error
echo date('Y-m-d',strtotime('-1 day'));//正解
echo "<br>";

echo date('Y-m-d',time()-24);//今日が出る