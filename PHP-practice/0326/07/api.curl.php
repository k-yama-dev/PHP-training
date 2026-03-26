<?php
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=".$_GET['zip'];

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($ch);
//api3
$response = json_decode($response,true);
//var_dump($response);
echo "入力された郵便番号は、";
echo $response['results'][0]['address1'];
echo $response['results'][0]['address2'];
echo $response['results'][0]['address3'];
echo " の郵便番号です〒";
