<?php


/**
 * this file tests the Calculator class
 */
require 'Calculator.php';

/**
 * this class tests various calcultor operations
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
  /**
   * tests addition function
   * @return [type] confirms output of 4+6
   */
  public function testAdd()
  {
    $ope = "Addition";
    $calc = new Calculator(4,6,$ope);
    $ans = $calc->solve();
    $this->assertEquals(10,$ans);
  }

  /**
   * tests subtraction function
   * @return [type] confirms output of 6-4
   */
  public function testSubtract()
  {
    $ope = "Subtraction";
    $calc = new Calculator(4,6,$ope);
    $ans = $calc->solve();
    $this->assertEquals(2,$ans);
  }

  /**
   * tests Multiplication function
   * @return [type] confirms output of 4*6
   */
  public function testMultiply()
  {
    $ope = "Multiplication";
    $calc = new Calculator(4,6,$ope);
    $ans = $calc->solve();
    $this->assertEquals(24,$ans);
  }

  /**
   * tests Division
   * @return [type] confirms quotient of 49/4
   */
  public function testDivide()
  {
    $ope = "Division";
    $calc = new Calculator(4,49,$ope);
    $ans = $calc->solve();
    $this->assertEquals(12,$ans);
  }


}
