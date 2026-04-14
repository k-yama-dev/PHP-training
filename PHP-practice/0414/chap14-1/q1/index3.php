<?php
class ParentA {
    public function __construct() {
        echo "ParentAのコンストラクタ";
    }
}
class ChildA extends ParentA {}

new ChildA();
// new ParentA();//直接親から作ることもできる