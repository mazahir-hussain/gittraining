<?php

require_once 'mockobjects_2.php';

class TestSumsUp extends PHPUnit_Framework_Testcase
{
  /**
   * [test_func description]
   * @param  [type] $input [description]
   * @return [type]        [description]
   */
  // /**
  //  * @dataProvider inputData
  //  */
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


    $mock->fibonacci(1);
    $mock->fibonacci(2);
    $mock->fibonacci(3);
    $mock->fibonacci(4);
    $mock->fibonacci(5);
  }

  // public function inputData()
  // {
  //   return array(array(1,2,3,4,5,6));
  // }
}
