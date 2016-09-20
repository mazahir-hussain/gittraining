<?php

/**
*this is an attempt to implement a singleton design patter in php
*there will be a class that creates an instance itself
*it will use the instance function to create the instance
*@return that instance
*/


class MakeObject
{
  static $instance;

  public static function createInstance()
  {
    if (self::$instance == null) {
      $instance = new MakeObject();
    }
    return $instance;
  }

  private function __construct()
  {
  }

}

$obj1 = MakeObject::createInstance();
$obj2 = MakeObject::createInstance();
if ($obj1 == $obj2) {
	echo "Same" . "\n";
}


?>
