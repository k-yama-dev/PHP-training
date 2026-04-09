<?php
session_start();
require('dbconnect.php');

//login.php経由でない場合はLOGINに戻る
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

//POSTされた場合
if (!empty($_POST)) {
    //メッセージの書き込み
    if (!empty($_POST['message'])) {
        $message = h($_POST['message']);
        $mid = $_SESSION['id'];
        if ($message!='') {
            try {
                $statement = $db->prepare('insert into messages (message,mid,mecre,deleted) values(?,?,now(),false);');
                $statement->bindParam(1, $message,PDO::PARAM_STR);
                $statement->bindParam(2, $mid,PDO::PARAM_INT);
                $statement->execute();
            } catch(PDOException $e) {
                $error['insert'] = "書き込みに失敗しました。";
            }
        }
    //コメント書き込み
    } elseif (!empty($_POST['reply'])) {
        $reply = h($_POST['reply']);
        $meid = $_POST['hid'];
        $mid = $_SESSION['id'];
        if ($reply!='') {
            try {
                $statement = $db->prepare('insert into comments (meid,mid,comment,cocre) values(?,?,?,now());');
                $statement->bindParam(1, $meid,PDO::PARAM_INT);
                $statement->bindParam(2, $mid,PDO::PARAM_INT);
                $statement->bindParam(3, $reply,PDO::PARAM_STR);
                $statement->execute();
            } catch(PDOException $e) {
                $error['insert'] = "書き込みに失敗しました。";
            }
        }
    //メッセージ削除
    } elseif (!empty($_POST['delmess'])) {
        $meid = $_POST['delmess'];
        try {
            $statement = $db->prepare('update messages set deleted=true where meid=?;');
            $statement->bindParam(1, $meid,PDO::PARAM_INT);
            $statement->execute();
        } catch(PDOException $e) {
            $error['insert'] = "削除に失敗しました。";
        }
    }
}
 
try {
    //全体のメッセージの一覧
    $posts = $db->query('select s1.mid,s1.meid,s1.message,mb.picture,mb.mname,s1.mecre,'.
        'COALESCE((select count(*) from comments as s2 where s1.meid=s2.meid group by meid),0) as comcnt,'.
        'COALESCE((select count(*) from melike as s3 where s1.meid=s3.meid group by meid),0) as likecnt '.
        'from messages as s1 '.
        'inner join members mb on s1.mid=mb.mid ' .
        'where s1.deleted=false '.
        'order by s1.meid desc;'
    );

    //全体のコメントの一覧
    $comments = $db->query('select co.cid,co.comment,co.meid,co.mid,co.cocre,mb.mname from (comments co '.
        'inner join messages me on co.meid=me.meid )'.
        'inner join members mb on mb.mid=co.mid '.
        'where me.deleted=false '.
        'order by meid desc,cid desc;'
    );
    $comment = $comments->fetchAll(PDO::FETCH_ASSOC);

    //自分がメッセージに押したいいねの一覧
    $mlikes = $db->query('select meid from melike '.
        'where mid=' . $_SESSION['id']
    );
    $mlike = $mlikes->fetchAll(PDO::FETCH_ASSOC);

    //自分がコメントに押したいいねの一覧
    $clikes = $db->query('select cid from colike '.
        'where mid=' . $_SESSION['id']
    );
    $clike = $clikes->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $error['select'] = $e->getMessage();
}

$commentRow = 0; //コメントの行番号
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <?php
    function searchMyLike(array $array, string $key, string $value): array {
        $result = array_filter($array, function ($item) use ($key, $value) {
            return is_array($item) && isset($item[$key]) && $item[$key] === $value;
        });
    
        return $result;
    }
    ?>
</head>
<body>
    <div class="board-container">
        <div class="exit"><a href="logout.php" onclick="return confirm('logoutします');">ログアウト</a></div>
        <div class="mess">
            <?php if (!empty($error['insert'])) : ?>
            <p class="error">
            <?php echo $error['insert'];?>
            </p>
            <?php endif; ?>
            <?php if (!empty($error['select'])) : ?>
            <p class="error">
            <?php echo $error['select'];?>
            </p>
            <?php endif; ?>
            <form action="" method="post">
                <textarea name="message" rows="5" placeholder="今の気分は？"></textarea>
                <div class="mess-actions">
                    <button type="submit">投稿</button>
                </div>
            </form>
        </div>
        <?php
        foreach($posts as $post) :
        ?>
        <div class="post">
            <div class="post-header">
                <img src="member_image/<?php echo h($post['picture']); ?>" alt="" width="48" height="48">
                <span>投稿者: <?php echo h($post['mname']); ?></span>
                <span><time datetime="<?php echo h($post['mecre']); ?>"><?php echo h($post['mecre']); ?></time></span>
                <div class="post-info">
                    <span>
                    <?php if ($post['mid'] == $_SESSION['id']): ?>    
                    <form action="" method="post" onsubmit="return confirm('削除してよろしいですか？');">
                    <button class="pushDelete"><i class="fa-solid fa-trash warning"></i></button>
                    <input type="hidden" name="delmess" value="<?php echo $post['meid'];?>">
                    </form>
                    <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="post-content">
                <?php echo h($post['message']); ?>
            </div>
            <div class="post-actions">
                <?php if (!empty(searchMyLike($mlike,"meid",$post['meid']))): ?>
                    <button class="pushLike" data-meid="<?php echo $post['meid'];?>" data-id="<?php echo $_SESSION['id']; ?>">
                    <i class="fa-solid fa-heart fa-red" id="likemark<?php echo $post['meid']; ?>"></i></button>
                <?php else: ?>
                    <button class="pushLike" data-meid="<?php echo $post['meid'];?>" data-id="<?php echo $_SESSION['id']; ?>">
                    <i class="fa-regular fa-heart" id="likemark<?php echo $post['meid']; ?>"></i></button>
                <?php endif; ?>
                <span class="like-count" id="likecount<?php echo $post['meid']; ?>"><?php echo h($post['likecnt']); ?></span>
                <button class="pushComment" onclick="reply_open(<?php echo h($post['meid']); ?>);">コメント</button>
                <div class="modal">
                    <div class="replys" id="post<?php echo h($post['meid']); ?>">
                        <form action="" method="post">
                            <textarea name="reply" rows="10" placeholder="コメントを入力してください"></textarea>
                            <button type="submit">書き込み</button>
                            <button onclick="reply_open(<?php echo ($post['meid']); ?>);return false;">キャンセル</button>
                            <input type="hidden" name="hid" value="<?php echo h($post['meid']); ?>">
                        </form>
                    </div>
                </div>
            </div>
            <div class="comments">
                <?php for($c = 0; $c < $post['comcnt']; $c++): ?>
                <div class="comment">
                    <div class="comment-header">
                        <span>コメント者: <?php echo h($comment[$commentRow]['mname']); ?></span>
                        <span><time datetime="<?php echo h($comment[$commentRow]['cocre']); ?>"><?php echo h($comment[$commentRow]['cocre']); ?></time></span>
                    </div>
                    <div class="comment-content">
                        <?php echo h($comment[$commentRow]['comment']); ?>
                    </div>
                    <div class="comment-actions">
                        <?php if (!empty(searchMyLike($clike,"cid",$comment[$commentRow]['cid']))): ?>
                            <button class="pushComLike" data-cid="<?php echo $comment[$commentRow]['cid'];?>" data-id="<?php echo $_SESSION['id']; ?>">
                            <i class="fa-solid fa-heart fa-red" id="clikemark<?php echo $comment[$commentRow]['cid']; ?>"></i>
                        <?php else: ?>
                            <button class="pushComLike" data-cid="<?php echo $comment[$commentRow]['cid'];?>" data-id="<?php echo $_SESSION['id']; ?>">
                            <i class="fa-regular fa-heart" id="clikemark<?php echo $comment[$commentRow]['cid']; ?>"></i>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                    $commentRow++;
                endfor;
                ?>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
    <script src="js/ajax.js"></script>
    <script>
        document.querySelectorAll(".pushDelete").forEach(button => {
            button.addEventListener("click", function() {
                this.submit();
            });
        });
        document.querySelectorAll(".pushLike").forEach(button => {
            button.addEventListener("click", function() {
                const meid = this.getAttribute("data-meid");
                const id = this.getAttribute("data-id");
                pushLikeButton(meid,id,'likecount'+meid,'likemark'+meid);
            });
        });
        document.querySelectorAll(".pushComLike").forEach(button => {
            button.addEventListener("click", function() {
                const cid = this.getAttribute("data-cid");
                const id = this.getAttribute("data-id");
                pushComLikeButton(cid,id,'clikemark'+cid);
            });
        });
        function reply_open(id) {
            var rep = document.getElementById("post"+id);
            rep.style.display = rep.style.display == "block" ? "none" : "flow";
            var parent = rep.parentNode;
            parent.style.display = parent.style.display == "block" ? "none" : "flow";
        }
        // 更新関数呼び出し
        async function pushLikeButton(mess,member,ltag,itag) {
            let outicon = document.getElementById(itag);
            let list = outicon.className;
            if (list.indexOf('fa-red')==-1) {//赤が無ければ現在0なので1に変えたい
                var onoff = 1;
            } else {
                var onoff = 0;
            }
            await getLike( mess,member,onoff,ltag, itag ) ;
        }
        // いいね更新関数
        async function getLike( mess, member, onoff, outTag, markTag ) {
            const data = {
                meid : mess,
                mid  : member,
                on   : onoff
            } ;
            try {
                const res = await postData( 'likeExec.php' , data) ;
                if ( !res.status ) {										// データの取得状態のチェック
                    throw res.retData ;										// 正常に取得できなかったらエラーを投げてcatch()で処理する。
                }
                // データが正常に取得できた処理
                const retData = res.retData.data ;
                if ( res.retData.status ) {									// リクエストのエラーチェック
                    const lcnt = `${retData.likecount}` ;	// プロフィールの編集
                    var outdiv = document.getElementById(outTag);
                    outdiv.innerHTML = lcnt;
                    var outicon = document.getElementById(markTag);
                    if (onoff==1) { //onにする
                        outicon.classList.replace('fa-regular','fa-solid');
                        outicon.classList.add('fa-red');
                    } else {
                        outicon.classList.replace('fa-solid','fa-regular');
                        outicon.classList.remove('fa-red');
                    }
                    // console.log(lcnt);							// プロフィールの表示
                } else {
                    console.error( retData.reason ) ;						// リクエストエラーの表示
                }
            } catch( e ) {													// エラーの処理
                // console.error(e) ;
            }
        }
        // コメントいいね更新関数呼び出し
        async function pushComLikeButton(cid,member,itag) {
            let outicon = document.getElementById(itag);
            let list = outicon.className;
            if (list.indexOf('fa-red')==-1) {//赤が無ければ現在0なので1に変えたい
                var onoff = 1;
            } else {
                var onoff = 0;
            }
            await getComLike( cid,member,onoff, itag ) ;
        }
        // コメントいいね更新関数
        async function getComLike( cid, member, onoff, markTag ) {
            const data = {
                cid : cid,
                mid  : member,
                on   : onoff
            } ;
            try {
                const res = await postData( 'clikeExec.php' , data) ;
                if ( !res.status ) {										// データの取得状態のチェック
                    throw res.retData ;										// 正常に取得できなかったらエラーを投げてcatch()で処理する。
                }
                // データが正常に取得できた処理
                const retData = res.retData.data ;
                if ( res.retData.status ) {	
                    var outicon = document.getElementById(markTag);								// リクエストのエラーチェック
                    if (onoff==1) { //onにする
                        outicon.classList.replace('fa-regular','fa-solid');
                        outicon.classList.add('fa-red');
                    } else {
                        outicon.classList.replace('fa-solid','fa-regular');
                        outicon.classList.remove('fa-red');
                    }
                    // console.log(lcnt);							// プロフィールの表示
                } else {
                    console.error( retData.reason ) ;						// リクエストエラーの表示
                }
            } catch( e ) {													// エラーの処理
                // console.error(e) ;
            }
        }
    </script>
</body>
</html>
