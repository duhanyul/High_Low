<?php
echo "ENTER A NUMBER FOR THE COMPUTER TO GUESS BETWEEN 1 and 100: ";
$magicNumber = fgets(STDIN);
$min = 0;
$max = 101;
$count = 0;
while ($input != $magicNumber) {
  $input = intval(($max + $min)/2);
  echo "The Computer chose $input" . PHP_EOL;
  if ($input < $magicNumber) {
    echo "HIGHER" . PHP_EOL;
    $min = $input;
  }elseif ($input > $magicNumber) {
    echo "LOWER" . PHP_EOL;
    $max = $input;
  }
  $count += 1;
  echo "The count is: $count" . PHP_EOL;
}
echo "GOOD JOB COMPUTER". PHP_EOL;
