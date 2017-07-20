<?php
$magicNumber = mt_rand(1,100);
fwrite(STDOUT,"Would you like to guess a number? (yes/no)" . PHP_EOL);
$input = readline("");

if ($input == 'yes') {
  while ($input != 'EXIT') {
    fwrite(STDOUT, "Guess a number" . PHP_EOL);
    fwrite(STDOUT, "If you wish to quit type EXIT" . PHP_EOL);
    $input = readline("");
    if ($input < $magicNumber) {
      fwrite(STDOUT, "HIGHER" . PHP_EOL);
    }elseif ($input > $magicNumber) {
      fwrite(STDOUT, "LOWER" . PHP_EOL);
    }else {
      fwrite(STDOUT, "Great Guess!" . PHP_EOL);
      fwrite(STDOUT, "Play Again? (yes/no)" . PHP_EOL);
      $input = readline("");
      if ($input == "yes") {
        $magicNumber = mt_rand(1,100);
      }elseif ($input == 'no') {
        $input = 'EXIT';
        echo "Thanks for playing!";
      }
    }
  }
}
