<?php
//(for loop) exercise 3

for($i = 0; $i <= 5; $i++){
  for($j = 0; $j < $i; $j++)
    echo "*";
  echo PHP_EOL;
}
for($x = 5; $x > 0; $x--){
  for($j = 0; $j < $x; $j++)
    echo "*";
  echo PHP_EOL;
}