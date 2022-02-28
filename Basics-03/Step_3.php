<?php
function conunt_word($sentence, $word)
{
  $arr = explode($word, $sentence);
  echo count($arr) - 1;
}
conunt_word("hi yahya,hi hello hi hjsb hi sjm hi", "hi");
