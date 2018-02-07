<?php

$dbServername = "";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

function custom_hash($HashPass, $id = null) {
  $algos = hash_algos();
  $count = count($algos);
  if ($id == null) {
    $id = rand(0, $count - 1);
  }
  $algo = $algos[$id];
  $separators = ['a', 'b', 'c', 'd', 'e', 'f'];
  $separator_id = rand(0, count($separators) - 1);
  $separator = $separators[$separator_id];
  $hash = hash($algo, $HashPass);
  echo "ID in the function: $id<br/>";
  echo "Separator: $separator<br/>";
  echo "Hash: $hash<br/>";
  $pswHashed = $id . $separator . $hash;
  echo "Password hashed in function: $pswHashed<br/>";
  return $pswHashed;
}
