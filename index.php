<?php

class Box {
    public $var;
    public $foo;
    public $bar;
    public function __construct($var, $foo, $bar){
        var_dump($var, $foo, $bar);
        $this->var = $var;
        $this->foo = $foo;
        $this->bar = $bar;
    }
    
    public function __set($name, $value){
        var_dump($name, $value);
    }
    public function __get($name){
        return "prop $name does not exist";
    }

    public function __call($name, $args){
        var_dump($name, $args);
    }
    public function __toString(){
        return 'hello im box';
    }
    public function __destruct(){
        echo 'object was destroyed';
    }
}

$box = new Box('asd', 1, 2);
$box->bla = 1;
var_dump($box->asdasda);
$box->helloworld(1,3,'asda');
echo $box;
var_dump(serialize($box));