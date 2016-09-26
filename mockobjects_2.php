<?php

class SumsUp
{
  public function __construct()
  {

  }
  /**
   * calculates sum of array
   * @param  [type] $array array of numbers
   * @return [type]        sum of all elements
   */
  function sumOfArray($array)
  {
    $sum = 0;
    foreach ($array as $val1)
    {
      $sum = $sum+$val1;
    }
    return $sum;
  }

/**
 * calculates fibonacci number on $numth position
 * @param  [type] $num nth number
 * @return [type]      value of number
 */
  function fibonacci ($num)
  {
    if ($num == 1 || $num == 2)
    {
      return 1;
    }
    else
    {
      return SumsUp::fibonacci($num - 1)+SumsUp::fibonacci($num - 2 );
    }
  }

}

//echo SumsUp::fibonacci(3) . "\n";
