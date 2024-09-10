<?php

class Box {
    public static $count = 0;
    public $bar = 1; 
    public function test2(){
        var_dump(static::class, self::$count);
    }
    public static function test(){
        
        var_dump(static::class);
    }
}
class MetalBox extends Box {

}
Box::$count = 1;
Box::$count = 2;
MetalBox::test();
$box = new Box();
$box->test2();
var_dump(Box::$count, Box::$count);