<?php

// echo "<a href='https://www.google.com/'>Google</a> <br>";
// echo '<a href="https://www.google.com/">Google</a> <br>';
// echo "<a href=\"https://www.google.com\">Google</a> <br>";




/*===============================
~~ PHP Variables ~~
===============================*/

/* A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) */

// $my_name = 'hossain ahmed';
// echo $my_name;

// $age = 34;
// $name = "hossain ahmed";
// echo "my name is $name and my age is $age";

// $age = 34;
// $name = "hossain ahmed";
// echo 'my name is ' . $name . ' my age is ' . $age;

// $userName = "Hossain Ahmed";
// echo $userName ."</br>";

// $parsonName = "Jon Smith";
// $fatherName = "Smith";
// $age = 30;
// echo 'My name is '.$parsonName. ' and my father name is ' .$fatherName. ' and my age ' .$age;


/*===============================
~~ PHP constant ~~
===============================*/
// const NID = "344554543";
// $nid = NID;
// echo "My National no is $nid";

// define ("car", ['BMW', "Aleon", "Marcydis"]);
// echo car[2];

// define ("subject", ["Bangla", "English", "Math", "Science"]);
// echo subject[0];

// define ("bazar", ["Tomato", "Poteto", "Sugar", "Orange"]);
// echo bazar[2];


// $const = $card = 3545565553;
// $nid = $card;
// echo "my National card is $nid </br>";

// define ("leptopBrand",["Lenovo", "HP", "Dell", "Mac"]);
// echo leptopBrand[2] ."</br>";

// define ("foods", ["orange", "mengo", "painaple", "apple"]);
// echo foods[3] ."</br>";

// $const = $contractNo = 5554324452235;
// $parson = $contractNo;
// echo "my phone number is $parson";



/*===============================
~~ PHP var_dump() Function ~~
===============================*/
// $name = 4545423;
// var_dump($name);
// echo get_debug_type($name);

// $null = ['a' , 'b' , 'c'];
// var_dump($null);

// var_dump((bool) ""); //false
// var_dump((bool) "0"); //false
// var_dump((bool) 1); //true
// var_dump((bool) -1); //true
// var_dump((bool) "foo"); //true
// var_dump((bool) array(12)); //true
// var_dump((bool) array()); //false
// var_dump((bool) "false"); //true 

// is_array, is_boolean, is_null is_string
// $name = 'Hossain';
// if (is_string($name)) {
//     echo $name;
// }

// $name = 'hossain';
// if(is_string($name)) {
//     var_dump ($name);
// }



/*===============================
~~ PHP Data Types ~~
===============================*/
// Variables can store data of different types, and different data types can do different things.
// PHP supports the following data types:
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource


//~~ integer, float ~~
/*var_dump(5542443243);
var_dump((int) (45.765));
var_dump((round(36/45)));*/

// ~~ string ~~
//arnold onace said i'll be back
// echo 'arnold onace said "I\'ll be back"';

// you deleted c:\\*.*'?'
// echo 'you deleted c:\\*.*\'?';

// https://www.google.com/
// echo "<a href=\"https://www.google.com/\">google</a>";
echo "<a href=\"https://www.google.com/\">Google</a>";

// $name = "Hossain ahmed";
// echo "my name is $name";
// echo 'my name is ' .$name;
// echo 'my name is ' . $name;
// $collegeName = 'Chittagong Sceience and technology Institute';
// echo 'my college name is ' .$collegeName;

