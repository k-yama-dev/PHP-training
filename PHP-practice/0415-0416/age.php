<?php
$users = [
    ['name' => '山田', 'age' => 17],
    ['name' => '佐藤', 'age' => 28],
    ['name' => '林', 'age' => 24]
];

usort($users, function ($a, $b) {
    return $a['age'] <=> $b['age'];
});
var_dump($users);

$users2 = [
    ['name' => '山田', 'age' => 17],
    ['name' => '佐藤', 'age' => 28],
    ['name' => '林', 'age' => 24]
];
?>
<br>
<?php
$adult_users = array_filter($users2, function ($user) {
    return $user['age'] >= 20;
});
var_dump($adult_users);
?>
<br>
<?php
$users3 = [
    ['name' => '山田', 'money' => 17000],
    ['name' => '佐藤', 'money' => 28000],
    ['name' => '林', 'money' => 24000]
];
$rich_users = array_map(function ($user) {
    $user['money'] *= 2;
    return $user;
}, $users3);
var_dump($rich_users);
?>
<br>
<?php
$users4 = [
    ['name' => '山田', 'money' => 17000],
    ['name' => '佐藤', 'money' => 28000],
    ['name' => '林', 'money' => 24000]
];
$totalMoney = array_reduce($users4, function ($sum, $usersS) {
    return $sum + $usersS['money'];
}, 0);
$averageMoney = $totalMoney / count($users4);
var_dump($averageMoney);
