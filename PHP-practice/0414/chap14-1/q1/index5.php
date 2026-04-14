<?php
class ParentC {
    public function __construct() {
        echo "ParentCのコンストラクタ";
    }
}
class ChildC extends ParentC {
    public function __construct() {
        parent::__construct();  //意図的に親のコンストラクタを呼び出す
        echo "ChildCのコンストラクタ";
    }
}

new ChildC();
// new ParentB();//直接親から作ることもできる