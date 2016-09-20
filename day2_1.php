<?php

/**
* the purpose of this file is to create a fucntion that counts and prints the
* number of given character in a given file
*/

/**
* the function takes the name of the file as an input
* @param file name
* @return void
* to ensure counting of all characters and treating upper and lower case as the
* same it uses the function strtolower
*/



function getChars($file_name)
{
  $char = "a";
  $sum = "";
  $nth = "";

  while ($char != "aa") {
    $file1 = fopen($file_name, "r");
    while(!feof($file1)) {
      if (strtolower(fgetc($file1)) === $char) {
        $nth = $nth+1;
        $sum++;
      }
    }
    echo "there are $nth instances of an $char" . "\n";
    $char++;
    $nth = 0;
  }
  echo "this file has $sum characters in it". "\n";
}


getChars("file.txt");

 ?>
