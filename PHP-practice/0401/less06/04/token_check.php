<?php
if(!isset($_SESSION)){
    session_start();
}
if(empty($_POST['token'])){
    echo "エラー発生やで";
    exit;
}
if(!(hash_equals($_SESSION['token'],$_POST['token']))){
    echo "エラー発生やで2";
    exit;
}