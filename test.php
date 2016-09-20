<?php




$char = "a";
$nth;
$sum;

while ($char != "aa") {
  $file1 = fopen("file.txt", "r");
  while(!feof($file1)) {
    if (strtolower(fgetc($file1)) === $char) {
      $nth = $nth+1;
      $sum++;
    }
  }
  echo "there are $nth instance of an $char" . "\n";
  $char++;
  $nth = 0;
}
echo "this file has $sum characters in it";

?>
