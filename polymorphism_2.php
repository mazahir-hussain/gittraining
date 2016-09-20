<?php

/**
* this file will be used to calculate the area of different shapes
*/



/**
 * this class creates a new object Shape
 */
class Shape
{
  /**
   * width is either the width of a rectangle, square, triangle or the radius of
   * a circle
   * @var [int]
   */
  protected $width;
  protected $height;
  /**
   * the construct initiates the values of width and height on object creation
   * @param [int] $val1 [width or radius for circle]
   * @param [int] $val2 [height or zero for circle]
   */
  public function __construct($val1,$val2)
  {
    $this->width = $val1;
    $this->height = $val2;
  }
  /**
   * returns width that was set earlier
   * @return [int] [width]
   */
  public function getWidth() {
    return $this->width;
  }
  /**
   * returns height that was set earlier
   * @return [int] [height]
   */
  public function getHeight() {
    return $this->height;
  }
}

/**
 * this class is of an object Rectangle
 */
class Rectangle
{
  /**
   * calculates the area of a rectangle
   * @param  [some shape object] $shape [description]
   * @return [int]        [returns area]
   */
  public static function calcArea($shape)
  {
    //echo $shape->getWidth() . "\n";
    //echo $shape->getHeight() . "\n";
    return $shape->getWidth() * $shape->getHeight();
  }
}

/**
 * this class is of an object Triangle
 */
class Triangle
{
  /**
   * calculates area of a rectangle
   * @param  [some object] $shape [description]
   * @return [int]        [returns area]
   */
  public static function calcArea($shape)
  {
    return 0.5 * $shape->getWidth() * $shape->getHeight();
  }
}

class Circle
{
  /**
   * calculates area of a circle
   * @param  [type] $shape [description]
   * @return [type]        [returns area]
   */
  public static function calcArea($shape)
  {
    return 3.14*$shape->getWidth();
  }
}

$shape1 = new Shape(4,6);
//echo $shape1->getWidth();
echo Rectangle::calcArea($shape1) . "\n";
echo Triangle::calcArea($shape1) . "\n";
$shape2 = new Shape(7,0);
echo Circle::calcArea($shape2);

?>
