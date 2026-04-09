<?php
session_start();
require_once('../dbconnect.php');

if (!empty($_POST)) {
    //ファイルタイプチェック
    $fileName = $_FILES['image']['name'];
    if (!empty($fileName)) {
        $ext = mb_strtolower(substr($fileName,-4));
        if ( $ext != '.jpg' && $ext != '.gif' && $ext != '.png') {
            $error['image'] = '未対応のファイルタイプです';
        }
    }
    //重複アカウントのチェック
    $member = $db->prepare('SELECT COUNT(*) as cnt FROM members WHERE email=?;');
    $member->execute(array($_POST['mail']));
    $record = $member->fetch();
    if ($record['cnt'] > 0) {
        $error['mail'] = '登録済みのメールアドレスです';
    }

    if (empty($error)) {
        //画像を格納
        $image = date('YmdHis') . $fileName;
        if ($_FILES['image']['name']=='' ) {
            $image = 'noimage.jpg';
        } else {
            if (DIRECTORY_SEPARATOR == '\\') {
                $imagename = mb_convert_encoding($image,"sjis","utf8");
            } else {
                $imagename = $image;
            }
            move_uploaded_file($_FILES['image']['tmp_name'],'../member_image/' . $imagename);
        }
        $_SESSION['join'] = $_POST;
        $_SESSION['join']['image'] = $image;
        header('Location: check.php');
        exit;
    }
}
//再入力の場合
if (isset($_GET['mode']) && $_GET['mode'] == 'redo') {
    $_POST = $_SESSION['join'];
    $error['redo'] = true;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録画面</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h1>会員登録画面</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Nick Name" name="name" size="35"
            minlength="4" maxlength="100" value="<?php echo h($_POST['name'] ?? ''); ?>" required>
            <input type="email" placeholder="Mail Address" name="mail" size="80"  value="<?php echo h($_POST['mail'] ?? ''); ?>"
            required>
            <input type="password" placeholder="Password" name="pass" size="20"
            minlength="8" maxlength="20"  value="<?php echo h($_POST['pass'] ?? ''); ?>" required>
            <input type="file" class="joinFile" name="image" size="120">
            <?php if (isset($error['image'])) : ?>
            <span class="error"><?php echo $error['image']; ?></span>
            <?php endif; ?>
            <?php if (isset($error['redo'])) : ?>
            <span class="warning">画像を改めて選択してください</span>
            <?php endif; ?>
            <?php if (isset($error['mail'])) : ?>
            <span class="error"><?php echo $error['mail']; ?></span>
            <?php endif; ?>
            <button type="submit">確認</button>
        </form>
    </div>
</body>
</html>