<?php

class Box {
    private $width;
    protected $height;
    public int $length;

    public function getWidth(){
        return $this->width . ' meters';
    }
    public function setWidth($width){
        if($width < 0){
            $width = 0;
        }
        $this->width = $width;
    }
}

class MetalBox extends Box {
    use HasMaterial;
    public function echoWidth(){
        var_dump($this->width);
    }
    public function echoHeight(){
        var_dump($this->height);
    }
}

class Ball {
    use HasMaterial;
}

trait HasMaterial {
    public $material;
    public function setMaterial($material){
        $this->material = $material;
    }
}

$box = new MetalBox();
$box->setWidth(-10);
$box->echoHeight();
$box->setMaterial('wood');
var_dump($box);