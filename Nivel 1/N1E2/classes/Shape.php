<?php
declare(strict_types=1);

class Shape {
    public $width;
    public $height;

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}
?>