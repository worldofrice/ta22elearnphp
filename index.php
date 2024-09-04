<?php

$array = [1,2,3,4,5];

for($i=0;$i<count($array);$i++){
    $value = &$array[$i];

}

foreach($array as &$value){
    $value *= 2;
    var_dump($value);
}
var_dump($array);