<?php
// (for loop) exercise 1
function get_sum(int $n)
{
  $sum = 0;
  for ($i = 0; $i < strlen($n); $i++) {
    $last = $n % 10;
    $sum += $last;
    $n /= 10;
  }
  echo "the sum of the digits equal $sum";
}
get_sum(23451);
