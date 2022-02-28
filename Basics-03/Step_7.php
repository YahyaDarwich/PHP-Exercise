<?php
//(for loop) exercise 5

function reverse(string $sentence)
{
  for ($i = strlen($sentence); $i >= 0; $i--) {
    echo $sentence[$i];
  }
}
reverse("hi yahhyya fsjh");
