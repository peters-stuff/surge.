<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$a = explode(',,!!,,', file_get_contents('C:/xampp/htdocs/newsurg/data/misc/hash.hash'));
$counted_array = array_count_values($a);

$keys = array_keys($counted_array);

$h=$_GET['h'];

// get the key of the array item that has the name of the variable h
$key = array_search($h, $keys);

if ($key !== false) {
  // the variable h is found in the array
  $value = $counted_array[$keys[$key]];
  echo $value.' Posts' ;
} else {
  // the variable h is not found in the array
  echo "Variable not found";
}
?>
