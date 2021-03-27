<?php

/* Array functions
  1. array()        : used to create a new array
  2. array_pop()    : deletes the last element of an array
  3. array_push()   : insert new element to the end of an array
  4. sort()         : sort the elements of the array in ascending alphabetical order
  5. sizeof()       : return the number of elements in an array
*/


$arr = array("Piegon", "Leopard");
var_dump($arr);
echo sizeof($arr);
echo "<br>";

array_push($arr, "Zebra", "Tiger", "Elephant", "Ball", "Apple", "Kangaroo", "Snake");
var_dump($arr);
echo sizeof($arr);
echo "<br>";

array_pop($arr);
var_dump($arr);
echo sizeof($arr);
echo "<br>";

var_dump($arr);

//echo "1";


?>
