<?php
declare(strict_types=1);

require_once 'classes/Shape.php';
require_once 'classes/Rectangle.php';
require_once 'classes/Triangle.php';

$shapeOne = new Rectangle(20, 10);
$shapeTwo = new Triangle(5,2);

echo "the area of the rectangle is " . $shapeOne->area() . "\n";
echo "The area of the triangle is " . $shapeTwo->area() . "\n";
?>