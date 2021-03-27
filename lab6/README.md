# PHP Basics 101

## 1. Associative array and foreach loop

### Associative array
Associative arrays are used to store key value pairs. 
The associative arrays are very similar to numeric arrays in term of functionality but they are different in terms of their index. 
Associative array will have their index as string so that you can establish a strong association between key and values.

```
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

or

[
  "Peter" => "35",
  "Ben"   => "37",
  "Joe"   => "43"
]
```

### Foreach Loop
The foreach loop works only on arrays and objects, and is used to loop through each key/value pair in an array.
```
foreach( $array as $key => $element) {
    // PHP Code
}
```

Example:

```
<?php 
$employee = array( 
    "name" => "Ram", 
    "email" => "ram@gmail.com", 
    "age" => 18, 
    "gender" => "male"
  
); 
  
// Loop through employee array 
foreach($employee as $key => $element) { 
    echo $key . ": " . $element . "<br>"; 
} 
  
?>
```

Output

```
name: Ram
email: ram@gmail.com
age: 18
gender: male
```

## 2. Array Functions and String Functions

### Array Functions
The array functions allow you to access and manipulate arrays.
Simple and multi-dimensional arrays are supported.

Function     | Description
------------ | -------------
array()      | used to create a new array
array_pop()  | deletes the last element of an array
array_push() | insert new element to the end of an array
sort()       | sort the elements of the array in ascending alphabetical order
sizeof()     | return the number of elements in an array


### String Functions
The string functions allows you to access and manipulate strings.

Function | Description
-------- | -------------
echo()   | outputs one or more strings
strcmp() | compares two strings
strlen() | returns the length of a string
substr() | returns a part of a string
trim()   | removes predefined characters from a string

## 3. Array Sort
The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

Function | Description
-------- | -------------
sort()   | sort arrays in ascending order
rsort()  | sort arrays in descending order
asort()  | sort associative arrays in ascending order, according to the value
ksort()  | sort associative arrays in ascending order, according to the key

## 4. Classes and Objects
A class is a template for objects, and an object is an instance of class.
A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}).
All its properties and methods go inside the braces:

```
<?php 

class Class_name
{
  //code ...
}

?>
```

Example:
```
class Employee
{
  public $name;
  public $address;

  public function function_name(){
    //...
  }
}
```

We can create multiple objects from a class. 
Each object has all the properties and methods defined in the class, but they will have different property values.
Objects of a class is created using the new keyword.

```
$object_name = new Class_name;
```

Example:
```
<?php

$ram          = new Employee;
$ram->name    = "Ram Krishna";
$ram->address = "Ramechaap";

?>
```

> "->" is used to access the data member or the methods of a class.



