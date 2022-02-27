<?php
function getSum($num){
  $sum = 0;
  for($i = 0; $i < strlen($num); $i++){
    $last = $num % 10;
    $sum += $last;
    $num /= 10;
  }
  echo "the sum of digits $sum";
}
getSum(1273);