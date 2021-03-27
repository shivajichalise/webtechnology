<?php

echo "Array Sort in php";

/*
  sort()  : sort arrays in ascending order
  asort() : sort associative arrays in ascending order, according to the value
  ksort() : sort associative arrays in ascending order, according to the key
  rsort() : sort arrays in descending order
*/

$arr = array("Ram", "Abhinav", "Anuradha", "Fulkumari", "Santona");
echo "<br>";

foreach($arr as $value){
  echo $value . "<br>";
}

sort($arr);
echo "<br>";

echo "After sort()";
echo "<br>";

foreach($arr as $value){
  echo $value . "<br>";
}

rsort($arr);
echo "<br>";

echo "After rsort()";
echo "<br>";

foreach($arr as $value){
  echo $value . "<br>";
}

echo "<br>";
$aarr = array("Name:" => "Hari Bahadur", "Address" => "Dhunge Bagara", "Besto friendo" => "Madan Bahadur");

foreach($aarr as $key => $value){
  echo $key . " => " . $value;
  echo "<br>";
}

asort($aarr);
echo "<br>";

echo "After asort()";
echo "<br>";

foreach($aarr as $key => $value){
  echo $key . " => " . $value;
  echo "<br>";
}

ksort($aarr);
echo "<br>";

echo "After ksort()";
echo "<br>";

foreach($aarr as $key => $value){
  echo $key . " => " . $value;
  echo "<br>";
}

?>
