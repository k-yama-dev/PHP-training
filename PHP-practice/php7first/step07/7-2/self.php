<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの受信</title>
</head>
<body>
    <?php
        //null合体演算子 ?? ただし　()を付けないとうまくいかないときが多い
        print("POST: " . ($_POST['abc'] ?? "存在しません"));
        print("<br>");
        print($_GET['PHP_URL'] ?? '');
        print("<br>");
        print($_POST['PHP_SELF']);
        print("<br>");
        print($_SESSION['PHP_URL']);
        print("<br>");
        print($_SERVER['PHP_SELF']);    //7-2の正解
        print("<br>");

        print($_SERVER['REMOTE_PORT']); //port番号
        print("<br>");
        print($_SERVER['REMOTE_ADDR']); //ipアドレス 7-3正解
        print("<br>");
        print($_SERVER['REMOTE_HOST']); //存在しない
        print("<br>");
        print($_SERVER['REMOTE_USER']); //存在しない
        print("<br>");

        print($_POST['name']);  //存在しない
        print("<br>");
        print($_SERVER['text']);  //存在しない
        print("<br>");
        print($_GET['name']);  //7-4正解
        print("<br>");
        print($_REQUEST['name']);  //7-4 getはREQUESTでも取れる
        print("<br>");
        print($_SESSION['text']);  //存在しない
        print("<br>");

?>
</body>
</html>