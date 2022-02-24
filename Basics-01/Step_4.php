<?php
$name = "Yahya";
$position = "Web Developper";
$github_url = "https://github.com/YahyaDarwich";
$var1 = "Hello, I'm ";
$var2 = ", I'm a ";
$var3 = " please check my github link ";
$var4 = ".";
$var = "Hello, I'm ";
$var .= $name;
$var .= ", I'm a ";
$var .= $position;
$var .= " please check my github link ";
$var .= $github_url;
$var .= ".";
echo "Hello, I'm ".$name.", I'm a ".$position." please check my github link ".$github_url.".";
echo "Hello, I'm $name, I'm a $position please check my github link $github_url.";
echo $var1.$name.$var2.$position.$var3.$github_url.$var4;
echo $var;
//Hello, I'm Gaby, I'm a tech consultant please check my github link https://github.com/gk-git.
?>