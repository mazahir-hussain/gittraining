<?php

require_once 'mockobjects_2.php';

class TestSumsUp extends PHPUnit_Framework_Testcase
{
  /**
   * tests fibonaccif function
   * @return [type] checks assertions
   */
  public function test_func()
  {
    $mock = $this->getMockBuilder('SumsUp')
    ->setMethods(array('fibonacci'))
    ->getMock();


    $map = array(
      array(1,1),
      array(2,1),
      array(3,2),
      array(4,3)
    );

    $mock->method('fibonacci')->will($this->returnValueMap($map));


    $this->assertEquals($mock->fibonacci(1),1);
    $this->assertEquals($mock->fibonacci(2),1);
    $this->assertEquals($mock->fibonacci(3),2);
    $this->assertEquals($mock->fibonacci(4),3);
  }

  /**
   * tests sumofArray function
   * @return [type] checks assertions
   */
  public function test_func2()
  {
    $mock = $this->getMockBuilder('SumsUp')
    ->setMethods(array('sumOfArray'))
    ->getMock();

    $map2 = array(
      array([1,2,3],6),
      array([3,5,7],15)
    );

    $mock->method('sumOfArray')->will($this->returnValueMap($map2));

    $this->assertEquals($mock->sumOfArray(array(1,2,3)),6);
    $this->assertEquals($mock->sumOfArray(array(3,5,7)),15);
  }
}
