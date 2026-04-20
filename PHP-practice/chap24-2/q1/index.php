<?php
if (isset($_POST['user_name'])) {
    try {
        $dsn = 'mysql:host=mariadb;dbname=sample;charset=utf8';
        $dbh = new PDO($dsn, 'docker', 'password');
    } catch (PDOException $e) {
        echo "接続に失敗しました";
        echo $e->getMessage();
        exit();
    }

    $sql = "SELECT id,name FROM users WHERE name = '" . $_POST['user_name'] . "'";
    $sth = $dbh->prepare($sql);
    $sth->execute();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// insert into users values (1,'tanaka');
// insert into users values (2,'suzuki');
// insert into users values (3,'satou');
    echo '<h2>検索結果</h2>';
    if (isset($_POST['user_name'])) {
        echo '<ul>';
        while($user = $sth->fetch(PDO::FETCH_ASSOC)) {
            echo '<li>';
            echo "ユーザーID: {$user['id']}"; 
            echo "ユーザー名: {$user['name']}";
            echo '</li>'; 
        }
        echo '</ul>';
    }
?>
    <form action="" method="post">
        ユーザ名: <input type="text" name="user_name"><br>
        <button type="submit">検索する</button>
    </form>
</body>
</html>