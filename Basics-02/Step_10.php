<?php
function chech_palindrome(string $plaindrome){
  if($plaindrome == strrev($plaindrome)){
    echo "$plaindrome is plaindrome";
    return true;
  }
  else{
    echo "$plaindrome not a plaindrome";
    return false;
  }
}
chech_palindrome("madam");