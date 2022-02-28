<?php
//(for each loop) exercise 2

$transactions = array(
  array(
    "id" => 1,
    "name" => "Gaby",
    "email" => "gaby@codi.tech"
  ),
  array(
    "id" => 3,
    "name" => "Omar",
    "email" => "omar@codi.tech"
  )
);

foreach ($transactions as $one_value) {
  foreach ($one_value as $key => $value) {
    echo "id: ". $one_value ['id'] .", name: ". $one_value ['name'].", email: ".$one_value ['email']."\n";
  }
}