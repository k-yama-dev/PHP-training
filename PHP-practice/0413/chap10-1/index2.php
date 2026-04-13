<?php
$beforeFile = fopen('colors-before.txt','r');

$afterFile = fopen('colors-after.txt','w');

while($line = fread($beforeFile,100)){
    //行末の改行を削除して、後ろに「色」を付ける
    $color = str_replace("\r\n","色\r\n",$line);
    //新しいファイルに新しいテキストを追記する
    fwrite($afterFile,$color);
}

fclose($beforeFile);
fclose($afterFile);
?>
