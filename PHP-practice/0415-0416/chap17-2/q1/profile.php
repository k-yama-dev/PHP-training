<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1
    //profile.php?keywords[]=blue&keywords[]=sky
    //array(2) { [0]=> string(4) "blue" [1]=> string(3) "sky" }

    //2
    //profile.php?keywords[0]=blue&keywords[1]=sky
    //array(2) { [0]=> string(4) "blue" [1]=> string(3) "sky" }

    //3
    //profile.php?keywords[primary]=blue&keywords[secondary]=sky
    //array(2) { ["primary"]=> string(4) "blue" ["secondary"]=> string(3) "sky" }

    //4
    //profile.php?keywords=blue,sky
    //string(8) "blue,sky"

    var_dump($_GET['keywords']);
    ?>
</body>
</html>