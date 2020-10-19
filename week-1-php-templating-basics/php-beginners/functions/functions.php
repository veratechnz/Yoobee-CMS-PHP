<?php
// A function that can output a key from an array as it's value
function keyRef ($arr, $index) {
  // Reference associative array in question
  $newArray = array_keys($arr);
  // Return the key's data
  return $newArray[$index];
}

// A function that places info in clean presentable html <pre>
// die() will stop/kill all php processes, var_dump() dumps data to view
function dieDump ($data) {
  echo '<pre>';
    die(var_dump($data));
  echo '</pre>';
}


?>
