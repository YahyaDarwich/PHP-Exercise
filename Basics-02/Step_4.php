<?php
function isAmonstrong(int $n){
  $num = $n;
  $sum = 0;
  $num_of_digits = -1;

  while($num > 0){
    $num = (int)$num / 10;
    $num_of_digits++;
  }
  echo $num_of_digits;
 
  $num = $n;
  while($num > 0){
    $last = $num % 10;
    $sum += pow($last,$num_of_digits);
    $num /= 10;
  }
  if($sum == $n){
    echo "true";
    return true;
  }else{
    echo "false";
    return false;
  }
}
isAmonstrong(1634);
?>