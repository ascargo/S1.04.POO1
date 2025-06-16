<?php
declare(strict_types=1);

class Triangle extends Shape {
        function area() {
            return ($this->width * $this->height)/2;
    }
}
?>