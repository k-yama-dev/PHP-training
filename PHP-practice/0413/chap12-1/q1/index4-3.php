<?php
//「Hello, taro」と表示されるのはどれ？
//　ただし呼び出し方は message("Hello","taro");
message("Hello","taro");
// message("Hello");
// message();

//1 ok
function message($message, $name = "hanako") {
    print " $message, $name";
}

// //2
// function message(name, message) {
//     print " $message, $name";
// }

// //3 ok
// function message($message = "Hello", $name = "taro") {
//     print " $message, $name";
// }

// //4
// function message($message, $name = $taro) {
//     print " $message, $name";
// }

// //5
// function message("Hello", "taro") {
//     print " $message, $name";
// }

//番外：エラーが発生するが実行はできた
// function message($message="Hello", $name) {
//     print " $message, $name";
// }
