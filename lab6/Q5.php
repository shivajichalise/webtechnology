<?php

/* String functions
   1. echo()   : outputs one or more strings 
   2. strcmp() : compares two strings
   3. strlen() : returns the length of a string
   4. substr() : returns a part of a string
   5. trim()  : removes predefined characters from a string
 */

echo "Hello World; echo is being used to display this.";

echo "String1";
echo "<br>";
echo "String2";

echo strcmp("String1", "String2");
echo "<br>";

echo strlen("HELLO WORLD");
echo "<br>";

echo substr("Hello World", 6);
echo "<br>";

$string = "Radha ko mama ko dhara";
echo $string;
echo "<br>";
echo trim($string, "Ra");
echo "<br>";


?>
