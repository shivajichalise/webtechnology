<?php

$arr = array("index0" => "0", "index1" => "1", "index2" => "2", "index3" => "3");
foreach($arr as $key => $value){
  echo $key . " --> " . $value . "<br>";
}

$persons = array(
  "Ram"=>array(
    "Fullname" => "Ram Bahadur",
    "Age"      => "20",
    "Address"  => "Hari Chowk"
  ),
 "Shyam"=>array(
    "Fullname" => "Shyam Raj Nepal",
    "Age"      => "22",
    "Address"  => "Lakeside"
 ),
 "Hari"=>array(
    "Fullname" => "Hari Bahadur",
    "Age"      => "24",
    "Address"  => "Dhunge Bagara"
 ),
 "Sita"=>array(
    "Fullname" => "Sita Kumari",
    "Age"      => "19",
    "Address"  => "Pokhara"
  ),
);

echo "<br>";

foreach($persons as $person => $details){
  echo $person . ": " . "<br>";
    foreach($details as $title => $detail){
      echo $title . ": " . $detail . ", ";
        echo "<br>";
    }
  echo "<br>";
}

?>
