<?php
require('dbconnect.php');

//likeの数を取得する
$retAry = array() ;										// 返信用配列データ
$req = json_decode( file_get_contents( 'php://input' ), true ) ;	// リクエストデータを取得 *注1
$meid = $req[ 'meid' ] ;				// リクエストされたID
$mid = $req[ 'mid' ] ;				// リクエストされたID
$flag = $req[ 'on' ] ;				// リクエストされたID

// //Likeを追加
if ($flag==true) {
	$istatement = $db->prepare('insert into melike values (?,?);');
	$istatement->bindParam(1, $meid, PDO::PARAM_INT);
	$istatement->bindParam(2, $mid, PDO::PARAM_INT);
	$istatement->execute();
} else {
	$istatement = $db->prepare('delete from melike where meid=? and mid=?;');
	$istatement->bindParam(1, $meid, PDO::PARAM_INT);
	$istatement->bindParam(2, $mid, PDO::PARAM_INT);
	$istatement->execute();
}

//Likeの個数取得
$gstatement = $db->prepare('select count(*) as lcnt from melike where meid=?;');
$gstatement->bindParam(1,$meid,PDO::PARAM_INT);
$gstatement->execute();
$cnt = $gstatement->fetch();
$lcnt = $cnt['lcnt'];


// プロフィールデータ
$likeAry =  array(
		'likecount' => $lcnt 
) ;
$retAry = array() ;										// 返信用配列データ
$req = json_decode( file_get_contents( 'php://input' ), true ) ;	// リクエストデータを取得 *注1
$retAry[ 'status' ] = true ;						// プロフィール取得成功
$retAry[ 'data' ] = $likeAry ;		// プロフィールの設定

echo( json_encode( $retAry ) ) ;						// JSON形式でデータを返します。
?>