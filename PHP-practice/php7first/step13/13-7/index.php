<?php
require 'vendor/autoload.php';

//送信設定
$transport = new Swift_SmtpTransport('forever.co.jp',25);
$transport->setUsername('eternal@forever.co.jp');
$transport->setPassword('12345');

$mailer = new Swift_Mailer($transport);

//メール作成
$message = new Swift_Message('Subject');
$message->setFrom(['eternal@forever.co.jp' => 'Hisanaga']);
$message->setTo(['eternalkagosima@gmail.com']);
$message->setBody(
    'This is test mail by php swiftmailer'
);

//メール送信
$result = $mailer->send($message);
?>