<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// このサンプルはおかしい
// mainでデータベースから本番号を指定して本の内容を読み込んでいるが、そこに本の冊数が入るのはおかしい
// データベースの１つ１つの情報に全体の冊数が入るはずがない
// 本来ならば本棚を１つ、そこに本番号で指定した本の情報を追加する、その時に冊数をインクリメントする
// 本を手放すときにデクリメントする、これならばbookshelfをシングルトンにすべき
// しかしこのサンプルは
// $bookshelf = $db->getBookshelf(['id' => 3]);

// if ($bookshelf->getBookCount() >= BookshelfConfig::getShelfLimit()) 
// としてbookshelfを返し、その中にcountがあるとしている

// BookshelfとDBをシングルトンにしてデータベースの中身のやり取りをするものとは別に
//しました。Bookshelfはnewできません。
class Bookshelf {
    private static $instance;
    private $bookCount = 0;

    private function __construct() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Bookshelf();
        }
        return self::$instance;
    }

    public function setCount($count) {
        $this->bookCount = $count;
    }
    public function addBook() {
        $this->bookCount++;
    }

    public function getBookCount() {
        return $this->bookCount;
    }
}

class BookshelfConfig {
    public static function getShelfLimit() {
        return 100;
    }
}


class DB {
    private static $instance;
    private $pdo;

    private function __construct() {
        $this->pdo = new PDO('mysql:host=mariadb;dbname=sample;charset=utf8', 'docker', 'password');
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getBookById($id)  {
        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$db = DB::getInstance();
$bookshelf = Bookshelf::getInstance();
// $bookshelf->setCount(100);
$book = $db->getBookById(3);
$id = $book['id']; 
$title = $book['title']; 
$score = $book['review_score'];
$bookshelf->addBook();
if ($bookshelf->getBookCount() >= BookshelfConfig::getShelfLimit()) {
    echo '本棚が満杯です';
} else {
    echo "あなたが追加したのは、id: {$id} title: {$title} score: {$score} です<br>";
    echo 'まだ本を追加できます';
}

?>
</body>
</html>