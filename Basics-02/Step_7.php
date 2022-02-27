<?php
function replace(string $sentence){
  $i = strlen($sentence);
  if($i < 1000)
    echo str_replace("Python", "PHP", $sentence);
  else
  echo "enter a sentence less than 1000 character";
}
replace("hello Python hjskabc Python bjasjk Python2 3$ ds  sdvPython%");