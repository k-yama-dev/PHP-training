<?php
$host = 'db';
$dbname = 'bbs';
$userid = 'testuser';
$password = 'testpass';
$charset = 'utf8';
$dsn = 'mysql:host='.$host.';dbname='.$dbname.';charset='.$charset;
try {
    $db = new PDO($dsn,$userid,$password);
    // echo '接続で来ました';
} catch (PDOException $e) {
    // echo '失敗しました';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mname = 'test2';
$email = 'test@abc.com';
$motopass = '12345';
$pass = password_hash($motopass,PASSWORD_DEFAULT);
try {
    $statement = $db->prepare('insert into members (mname, email, pass, created) values (?,?,?,now());');
    $statement->bindParam(1,$mname,PDO::PARAM_STR);
    $statement->bindParam(2,$email,PDO::PARAM_STR);
    $statement->bindParam(3,$pass,PDO::PARAM_STR);
    $statement->execute();
    echo "Insert成功";
} catch (PDOException $e) {
    echo "Insert失敗";
}
$statement = null;
$db = null;
?>
</body>
</html>