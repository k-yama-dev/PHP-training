<?php
require('dbconnect.php');

//likeの数を取得する
$retAry = array() ;										// 返信用配列データ
$req = json_decode( file_get_contents( 'php://input' ), true ) ;	// リクエストデータを取得 *注1
$cid = $req[ 'cid' ] ;				// リクエストされたID
$mid = $req[ 'mid' ] ;				// リクエストされたID
$flag = $req[ 'on' ] ;				// リクエストされたID

//Likeを追加
if ($flag==true) {
	$istatement = $db->prepare('insert into colike values (?,?);');
	$istatement->bindParam(1, $cid, PDO::PARAM_INT);
	$istatement->bindParam(2, $mid, PDO::PARAM_INT);
	$istatement->execute();
} else {
	$istatement = $db->prepare('delete from colike where cid=? and mid=?;');
	$istatement->bindParam(1, $cid, PDO::PARAM_INT);
	$istatement->bindParam(2, $mid, PDO::PARAM_INT);
	$istatement->execute();
}

// プロフィールデータ
$likeAry =  array();
$retAry = array() ;										// 返信用配列データ
$req = json_decode( file_get_contents( 'php://input' ), true ) ;	// リクエストデータを取得 *注1
$retAry[ 'status' ] = true ;						// プロフィール取得成功
$retAry[ 'data' ] = $likeAry ;		// プロフィールの設定

echo( json_encode( $retAry ) ) ;						// JSON形式でデータを返します。
?>