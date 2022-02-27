<?php
function isPowerOfTwo($n)
{
  if ($n == 0)
    echo "enter number # 0";
  else if ($n != 1) {
    if ($n % 2 != 0)
      echo "$n not power of 2";
    else {
      echo "$n is power of 2\n";
      echo "the square root of $n is " . sqrt($n);
    }
  }
}
isPowerOfTwo(36);
