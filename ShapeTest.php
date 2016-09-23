<?php

require 'polymorphism_final.php';

/**
 * this class is used to test the parent class Shape and its children classes
 */
class ShapeTest extends PHPUnit_Framework_Testcase
{
  /**
   * Test Shape uses two test cases to check if the area is beign calculated
   * correctly
   */

  public function testShape()
  {
    $rect = "Rectangle";
    $tri = "Triangle";

    $shape1 = new Shape(4,6,$rect);
    $shape2 = new Shape(4,6,$tri);

    $area1 = $shape1->calcArea();
    $area2 = $shape2->calcArea();

    $this->assertEquals(24,$area1);
    $this->assertEquals(12,$area2);
  }




  /**
   * uses dataProvider to take sample input and check answers by
   * creating MockObjects
   */
  /**
   * @dataProvider inputData
   */
  public function testShape2($type,$val1,$val2,$exp)
  {
    $mockShape = $this->getMockBuilder($type)
    ->setConstructorArgs(array($val1,$val2))
    ->setMethods(['calcArea'])
    ->getMock();


    $mockShape->expects($this->any())
    ->method('calcArea')
    ->withAnyParameters()
    ->will($this->onConsecutiveCalls(24,12,154));


    $shape1 = new Shape($val1,$val2,$type);
    $ans = $shape1->calcArea();
    $this->assertEquals($exp,$ans);


  }

  /**
   * provides input data for testShape2
   * @return [type] array of values
   */
  public function inputData()
  {
    return array(
      array('Rectangle',4,6,24),
      array('Triangle',4,6,12),
      array('Circle',7,0,154)
    );
  }
}

?>
