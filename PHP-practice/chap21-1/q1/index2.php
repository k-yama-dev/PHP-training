<?php
$filename = 'counter.log';
$file = fopen($filename,'c+');

// if (flock($file,LOCK_EX)) {
if (flock($file,LOCK_EX | LOCK_NB, $wouldblock)) {
    
    if (filesize($filename) > 0 ) {
        $count = fread($file, filesize($filename));

        if (!ctype_digit($count)) {
            exit('エラー: ' . $filename.'の中身が数字ではありませえん');
        }
    } else {
        $count = 0;
    }
    sleep(5);
    $count++;

    rewind($file);
    fwrite($file, $count);

    flock($file, LOCK_UN);
// } else {
} else {
    // exit('エラー:ファイルロックに失敗しました' );
    if ($wouldblock) {
        echo "ファイルは他のプロセスによってロックされています";
    } else {
        echo "ロック取得に失敗しました";
    }
}

fclose($file);