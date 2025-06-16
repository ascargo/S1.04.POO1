<?php
declare(strict_types=1);

class Rectangle extends Shape {
        function area(){
            return $this->width * $this->height;
        }
}
?>