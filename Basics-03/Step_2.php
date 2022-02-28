<?php
function factoriel(int $x)
{
  $multiple = 1;
  while ($x >= 1) {
    $multiple *= $x;
    $x--;
  }
  echo "factoriel equal $multiple";
}
factoriel(5);
