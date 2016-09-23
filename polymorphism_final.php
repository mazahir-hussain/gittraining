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
  //protected $width;
  //protected $height;
  protected $obj;
  /**
   * the construct initiates the values of width and height on object creation
   * @param [int] $val1 [width or radius for circle]
   * @param [int] $val2 [height or zero for circle]
   */
  public function __construct($val1,$val2,$name)
  {
    //$this->width = $val1;
    //$this->height = $val2;
    $this->obj = new $name($val1,$val2);
    //echo "step1";
  }

  /**
   * returns width that was set earlier
   * @return [int] [width]
   */
  // public function getWidth() {
  //   //echo "step4";
  //   //echo $this->width;
  //   return $this->width;
  // }
  // /**
  //  * returns height that was set earlier
  //  * @return [int] [height]
  //  */
  // public function getHeight() {
  //   //echo "step5";
  //   return $this->height;
  // }

  public function calcArea()
  {
    //echo "step2";
    return $this->obj->calcArea();

  }
}


/**
 * this class is of an object Rectangle
 */
class Rectangle extends Shape
{
  protected $width;
  protected $length;
  public function __construct($a,$b)
  {
    $this->width = $a;
    $this->height = $b;
  }
  /**
   * calculates the area of a rectangle
   * @param  [some shape object] $shape [description]
   * @return [int]        [returns area]
   */
  public function calcArea()
  {
    //echo "step3";
    return $this->width*$this->height;

  }
}

/**
 * this class is of an object Triangle
 */
class Triangle extends Shape
{

  protected $base;
  protected $height;

  public function __construct($a,$b)
  {
    $this->base = $a;
    $this->height = $b;
  }
  /**
   * calculates area of a rectangle
   * @param  [some object] $shape [description]
   * @return [int]        [returns area]
   */
  public function calcArea()
  {
    return 0.5 * $this->base * $this->height;
  }
}


class Circle extends Shape
{

  protected $radius;
  public function __construct($a)
  {
    $this->radius = $a;
  }

  /**
   * calculates area of a circle
   * @param  [type] $shape [description]
   * @return [type]        [returns area]
   */
  public function calcArea()
  {
    return 22/7*$this->radius*$this->radius;
  }
}



$rect = "Rectangle";
$tri = "Triangle";
$cir = "Circle";

$shape1 = new Shape(4,6,$rect);
$shape2 = new Shape(4,6,$tri);
$shape3 = new Shape(7,0,$cir);

//echo $shape1->calcArea() . "\n";
//echo $shape2->calcArea() . "\n";
//echo $shape3->calcArea() . "\n";





?>
