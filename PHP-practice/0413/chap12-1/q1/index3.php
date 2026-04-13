<?php
function return_value() {
    return 'Hi!';
}
function return_null() {
    return null;
}
function return_nothing() {
    return;
}
function no_return() {

}

var_dump(return_value());//'Hi'
var_dump(return_null());//null
var_dump(return_nothing());//null
var_dump(no_return());//null