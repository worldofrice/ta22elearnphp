<?php

class Box {
    public $var;
}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->var = 1;
$box2 = clone $box1;
$box2->var = 2;
var_dump($box1, $box2);