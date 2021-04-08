# Pattern Matching in PHP
Hypertext Preprocessor (PHP) using regular expression for pattern matching.
A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
Regular expression is of two types:

1. POSIX Regular Expression
2. Perl based Regular Expression

Here we'll work with Perl-Compatible Regular Expression (PCER).
Some of the PCER functions are:

Function         | Description
---------------- | ------------
preg_match()     | Returns 1 if the pattern was found in the string and 0 if not
preg_match_all() | Returns the number of times the pattern was found in the string, which may also be 0
preg_replace()   | Returns a new string where matched patterns have been replaced with another string
preg_split()     | Breaks a string into an array using matches of a regular expression as separators.

examples:
1. 


```
<?php

$str = "Hello There!";
$patterns1 = "/The/";
$patterns2 = "/^the/";
$patterns3 = "/the/i";

echo preg_match($patterns1, $str); // Outputs 1
echo preg_match($patterns2, $str); // Outputs 0 ---> '^' tells if the pattern is at start of the string.
echo preg_match($patterns3, $str); // Outputs 1 ---> 'i' after the pattern delimiter indicates a case-insensitive search.

?>
```

2. 

```
<?php

$str = "I live in Spain but the S is silent.";
$patterns1 = "/i/";
$patterns2 = "/i/i";
echo preg_match_all($patterns1, $str); // Outputs 5
echo preg_match_all($patterns2, $str); // Outputs 6

?>
```

3. 

```
<?php

$str = "Keep on knocking but you can't ---.";
$pattern = "/---/i";
echo preg_replace($pattern, "come in", $str); // Outputs "Keep on knocking but you can't come in."

?>
```

4. 

```
<?php

$str = "apple:banana:cucumber";
$strnew = preg_split("/:/", $str);
print_r($strnew); // Outputs --> Array ( [0] => apple [1] => banana [2] => cucumber )

?>
```

# File Handling
