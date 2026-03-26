<?php
//api6 isset
if(!isset($_GET['zip'])){
    echo "zipを設定せいや";
    exit;
}
//api5 preg_match
$rtn = preg_match('/\A\d{7}\z/u',$_GET['zip']);
if(!$rtn){
    echo "郵便番号は数字7桁で入力してください〒";
    exit;
}

$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=".$_GET['zip'];
$response = file_get_contents($url);
$response = json_decode($response,true);
//p158 memo
//存在しない郵便番号の時は終了
if($response['results'] === null){
    echo "その郵便番号は存在しないぞォ…";
    exit;
}
echo "入力された郵便番号は、";
echo $response['results'][0]['address1'];
echo $response['results'][0]['address2'];
echo $response['results'][0]['address3'];
echo " の郵便番号です〒";
echo $response['message'];