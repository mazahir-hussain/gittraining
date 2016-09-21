<?php


/**
 * this class calculator will apply different operations on two given numbers
 * it assumes for subtraction BIG NUMBER - SMALL NUMBER
 * it assumes for division BIG NUMBER / SMALL NUMBER
 * it assumes only quotient needed for divisionsimple
 */
class Calculator
{
  protected $obj;

  /**
   * it creates a new object based on its input
   * @param [type] $val1    operand1
   * @param [type] $val2    operand2
   * @param [type] $operator operator
   */
  public function __construct($val1,$val2,$operator)
  {
    $this->obj = new $operator($val1,$val2);
  }


  /**
   * this points to the solve of the respected class
   * @return [type] value from method of class
   */
  public function solve()
  {
    return $this->obj->solve();
  }

}

/**
 * this class will perform addition operation
 */
class Addition
{
  protected $a;
  protected $b;

/**
 * sets the values of protected variables
 * @param [type] $val1 operand1
 * @param [type] $val2 operand2
 */
  public function __construct($val1,$val2)
  {
    $this->a = $val1;
    $this->b = $val2;
  }

  /**
   * performs addition operation on operands
   * @return [type] sum of two numbers
   */
   public function solve()
   {
     return $this->a + $this->b;
   }


}


/**
 * this class will perform subtraction
 */

class Subtraction
{
  protected $a;
  protected $b;

/**
 * sets the values of protected variables
 * @param [type] $val1 operand1
 * @param [type] $val2 operand2
 */
  public function __construct($val1,$val2)
  {
    $this->a = $val1;
    $this->b = $val2;
  }

  /**
   * performs subtraction operation on operands
   * @return [type] difference of two numbers
   */
  public function solve()
  {
    if ($this->a > $this->b) {
      return $this->a - $this->b;
    } else {
      return $this->b - $this->a;
    }
  }

}

/**
 * this class will perfrom multiplication operation
 */
class Multiplication
{
  protected $a;
  protected $b;

/**
 * sets the values of protected variables
 * @param [type] $val1 operand1
 * @param [type] $val2 operand2
 */
  public function __construct($val1,$val2)
  {
    $this->a = $val1;
    $this->b = $val2;
  }

  /**
   * performs multiplication operation on operands
   * @return [type] sum of two numbers
   */
  public function solve()
  {
    return $this->a * $this->b;
  }
}

class Division
{
  protected $a;
  protected $b;

/**
 * sets the values of protected variables
 * @param [type] $val1 operand1
 * @param [type] $val2 operand2
 */
  public function __construct($val1,$val2)
  {
    $this->a = $val1;
    $this->b = $val2;
  }

  /**
   * performs subtraction operation on operands
   * @return [type] difference of two numbers
   */
  public function solve()
  {
    if ($this->a > $this->b) {
      return (int) ($this->a / $this->b);
    } else {
      return (int) ($this->b / $this->a);
    }
  }
}

$obj1 = new Calculator(4,9,'Addition');
echo $obj1->solve() . "\n";
$obj2 = new Calculator(13,6,"Subtraction");
echo $obj2->solve() . "\n";
$obj3 = new Calculator(6,13,"Subtraction");
echo $obj3->solve() . "\n";
$obj4 = new Calculator(5,25,"Multiplication");
echo $obj4->solve() . "\n";
$obj5 = new Calculator(4,123,"Division");
echo $obj5->solve() . "\n";
