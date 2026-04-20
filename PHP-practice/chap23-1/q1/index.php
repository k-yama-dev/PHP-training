<?php
setcookie('user[id]','12345');
setcookie('user[name]','山田');
setcookie('user[money]','120000');

if (isset($_COOKIE['user'])) {
    foreach($_COOKIE['user'] as $key => $value) {
        $key = htmlspecialchars($key);
        $value = htmlspecialchars($value);
        echo "$key : $value<br>";
    }
}