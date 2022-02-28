<?php
$x = 1;
while ($x <= 8) {
  $y = 1;
  while ($y <= $x) {
    echo "*";
    $y++;
  }
  echo "\n";
  $x++;
}
