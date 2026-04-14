<?php
class ParentB {
    public function __construct() {
        echo "ParentBのコンストラクタ";
    }
}
class ChildB extends ParentB {
    public function __construct() {
        echo "ChildBのコンストラクタ";
    }
}

new ChildB();
new ParentB();//直接親から作ることもできる