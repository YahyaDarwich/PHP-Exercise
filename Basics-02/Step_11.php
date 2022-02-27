<?php
function isPrime($n)
{

if ($n <= 1){
  echo("false");
  return false;
}
 for ($i=2; $i < $n; $i++){ 
   if ($n % $i==0){ 
     echo("false");
     return false; 
    } 
    else{
      echo("true");
      return true;
    }
  }
}
isPrime(17);