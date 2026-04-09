<?php
$ch = curl_init("http://localhost/php7first/step11/11-2/test2.html");

$fp = fopen("test2.txt","w");
echo "start index\n";
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);
echo "end index";
?>