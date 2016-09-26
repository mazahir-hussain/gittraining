<?php

class SumsUp
{
  public function __construct()
  {

  }
  // function sumOfArray($array)
  // {
  //   $sum = 0;
  //   foreach ($array as $val1)
  //   {
  //     $sum = $sum+$val1;
  //   }
  //   return $sum;
  // }

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
