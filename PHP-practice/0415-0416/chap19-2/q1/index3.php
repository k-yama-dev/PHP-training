<?php
//array_filter
$users = [
    ['name'=>'山田','age'=>17],
    ['name'=>'佐藤','age'=>28],
    ['name'=>'林','age'=>24]
];

$otona_users = array_filter($users,function($user){
    return $user['age'] >= 20;
});
echo "<br>otona:";
var_dump($otona_users);
echo "<br>";

function senkyo($year) {
    return $year['age'] < 18;
}

$canttouhyouUsers = array_filter($users,"senkyo");
echo "<br>senkyo:";
var_dump($canttouhyouUsers);

//佐藤、林
echo "<br>";

//array_map
$users = [
    ['name'=>'山田','money'=>17000],
    ['name'=>'佐藤','money'=>28000],
    ['name'=>'林','money'=>24000]
];

$rich_users = array_map(function($user){
    $user['money'] *= 2;
    return $user;
},$users);

var_dump($rich_users);
//34000,56000,48000
echo "<br>";

//array_reduce
$totalMoney = array_reduce($users,function($sum,$user) {
    return $sum + $user['money'];
},0);

$averageMoney = $totalMoney / count($users);
echo $averageMoney;