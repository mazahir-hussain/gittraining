<?php

/**
* this file can be used to create shapes and calculate area
*/


/**
* this interface extends all child classes of shape
*/

interface Area
{
  public function calcArea();
}


/**
* this class will create a new object shapes
*/


class Shape
{
  protected $width;
  protected $height;

  /**
  * this function sets the values of width and height
  */

  public function __construct($wid,$hei)
  {
    $this->width = $wid;
    $this->height = $hei;
  }


}

/**
* this class will create an object Rectangle
*/

class Rectangle extends Shape implements Area
{

  public function calcArea() {
    return $width*$height;
  }
}

$shape1 = new Shape(4,6);



?>
