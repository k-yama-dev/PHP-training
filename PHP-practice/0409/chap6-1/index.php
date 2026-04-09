<?php
echo 'chapter6-1 p49<br>';
echo '<br>1:'; 
echo (0 == '0'); //true 
echo '<br>2:';
echo (0 == ''); //false
echo '<br>3:';
echo (1 == true); //true
echo '<br>4:';
echo (1 == 1.0); //true

echo '<br><br> === 型も値も同じ<br>'; 
echo (1 === 1); //true 
echo '<br> === 型は同じintだが、値が異なる<br>'; 
echo (1 === 10); //false 
echo '<br> === 型がintとstringで異なる<br>'; 
echo (1 === '1'); //false 

echo '<br>浮動小数点0.99(false)<br>';
echo (1 == 0.99); //false
echo '<br>浮動小数点0.9999~（true:誤判定!!!）<br>';
echo (1 == 0.999999999999999999999); //true

echo '<br>0.2+0.2==0.4(true:正解)<br>';
echo (0.2 + 0.2 == 0.4); //false
echo '<br>0.1+0.2==0.3(false:誤判定!!!)<br>';
echo (0.1 + 0.2 == 0.3); //false

echo '<br>どうなる?<br>';
var_dump(0 =='');
var_dump(0 == 'hello');
var_dump(5 == '5px');
//php7での解釈
echo '<br>php7での解釈(3つともtrue)<br>';
var_dump(0 === 0 ); //true
var_dump(0 ===''); //true 
var_dump(5 === 5); //true
//php8での解釈
echo '<br>php8での解釈<br>';
var_dump(0 ===''); //false
var_dump(0 === 'hello'); //false
var_dump(5 === '5px'); //false
echo '<br>数値が先頭の文字列と数値<br>';
echo "5member < 10<br>";
var_dump("5member" < 10);
echo ("5member" < 10);
// php8 false '5' > '1'
//7数8文字
?>