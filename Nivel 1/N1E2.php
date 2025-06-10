<?php
class Shape {
    public $width;
    public $height;

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    function get_width() {
        return $this->width;
    }

    function get_height() {
        return $this->height;
    }
}

class Rectangle extends Shape {
    function __construct($width, $height) {
        parent ::__construct($width, $height);
    }

        function area(){
            return $this->width * $this->height;
        }
    
}

class Triangle extends Shape {
    function __construct($width, $height) {
        parent ::__construct($width, $height);
    }
        function area() {
            return ($this->width * $this->height)/2;
    }
}

$shapeOne = new Rectangle(20, 10);
echo $shapeOne->area();
$shapeTwo = new Triangle(5,2);
echo $shapeTwo->area();
?>
