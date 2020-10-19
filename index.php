<?php
include_once 'Point.php';
include_once 'MoveablePoint.php';
$Point1 =new Point(0,0);
echo $Point1->toString();
$Point2 =new MoveablePoint(0,0,1,1);
$Point2->move();
echo $Point2->toString();
?>

