<?php
//(for loop) exercise 4

for ($i = 0; $i < 7; $i++) {
  if ($i == 0)
    for ($j = 0; $j < 7; $j++)
      echo "*";
  else if ($i == 6)
    for ($j = 0; $j < 7; $j++)
      echo "*";
  else
    for ($j = 0; $j < 7; $j++)
      if ($j == $i)
        echo "*";
      else
        echo " ";
  echo PHP_EOL;
}
