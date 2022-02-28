<?php

$transactions = array(
  array(
    "id" => 1,
    "debit" => 2,
    "credit" => 3
  ),
  array(
    "id" => 2,
    "debit" => 15,
    "credit" => 10
  )
);

foreach ($transactions as $one_value) {
  foreach ($one_value as $key => $value) {
    $amount = abs($one_value ['debit']-$one_value ['credit']);
    echo "ID: ". $one_value ['id'] ." => ".$amount."\n";
  }
}