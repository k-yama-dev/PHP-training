<?php
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=8994343";
$response = file_get_contents($url);
var_dump($response);
