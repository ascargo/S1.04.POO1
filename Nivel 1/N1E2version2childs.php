<?php
class Shape {
    public $width;
    public $height;

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Rectangle extends Shape {
        function area(){
            return $this->width * $this->height;
        }
    }

class Triangle extends Rectangle {
        function area() {
            return parent::area() / 2;
    }
}

$shapeOne = new Rectangle(20, 10);
echo $shapeOne; echo __LINE__;
$shapeTwo = new Triangle(5,2);
echo $shapeTwo;
?>
