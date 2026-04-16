<?php
class Post {
    private int $timestamp;
    private string $subject;
    private string $content;
    private Writer $writer;

    public function __construct(string $subject,
                                string $content,
                                string $userId) {
        $this->timestamp = time();
        $this->subject = $subject;
        $this->content = $content;

        // $user = $db->getUserData(['id' => $userId]);//できない

        // $this->writer = new Writer($user);//$userができないのでこれもできない
        $this->writer = new Writer(1,$userId);
    }
    public function getPost(string $id) {
        return [$id,$this->subject,$this->content];
    }
}
class Writer {
    private string $id;
    private string $name;

    public function __construct($id, $name) {   
        // $this->timestamp = time();//error
        $this->id = $id;
        $this->name = $name;
    }
}

$post = new Post('早起きは三文の徳',
                '早起きして散歩したら三文も拾った',
                'pechizo2023');
$obj = $post->getPost('pechizo2023');
echo "id:{$obj[0]}/subject:{$obj[1]}/content:{$obj[2]}";
