<?php
echo $argv[1] . PHP_EOL;
echo $argv[2] . PHP_EOL;
if (is_numeric($argv[1]) && is_numeric($argv[2])) {
  echo "Arguments Passed" . PHP_EOL;
  if ($argv[1] < $argv[2]) {
    $magicNumber = mt_rand($argv[1],$argv[2]);
  }
}else {
  echo "No arguments passed" . PHP_EOL;
  $magicNumber = mt_rand(1,100);
}
fwrite(STDOUT,"Would you like to guess a number? (yes/no)" . PHP_EOL);
$input = readline("");

if ($input == 'yes') {
  while ($input != 'EXIT') {
    fwrite(STDOUT, "Guess a number" . PHP_EOL);
    fwrite(STDOUT, "If you wish to quit type EXIT" . PHP_EOL);
    $input = readline("");
    if ($input == "EXIT") {
      echo "GOODBYE";
    }
    elseif ($input < $magicNumber) {
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
