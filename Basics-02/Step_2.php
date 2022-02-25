<?php
function greaterfn($age){
  if($age < 10)
  echo "$age is less than 10";
  else if($age > 10 && $age < 20)
  echo "$age is greater than 10";
  else if($age > 20 && $age < 30) 
  echo "$age is greater than 20";
  else
  echo "$age is greater than 30";
}
greaterfn(40);
greaterfn(21);
greaterfn(12);
greaterfn(8);
?>