<?php
$ch = curl_init("http://localhost/php7first/step11/11-3/test3.html");

curl_exec($ch);

if(!curl_error($ch)) {
    $info = curl_getinfo($ch);
    echo "\nTook " , $info['total_time'], ' seconds to request to ',
        $info['url'], "\n";
}

curl_close($ch);
?>