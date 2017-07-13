<?php

class HelloWorld {

    public $myValue;

    public function my_hello_value($value) {
        $this->myValue = $value;
    }

    public function my_hello_function($param) {
        echo $param . $this->myValue . "<br>";
    }
}

$text = new hello_world();

$text->my_hello_value("world");
$text->my_hello_function("Hello, ");
