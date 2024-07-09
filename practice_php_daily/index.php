<?php
// echo "<a href=\"https://www.google.com/\">Google</a>";

//variable
// $first = "Hossain Ahmed";
// echo $first .'</br>';

// $productName = "Apple";
// $ProdutPrice = 100;
// $productQtn = 20;
// echo 'the name the foods '.$productName.' the price of the product '.$ProdutPrice.' the qtn '.$productQtn;


//constant

// const num = 4578897664;
// $number = num;
// echo $number ."</br>";

// define ("leptopName",["ThinkPad", "MAC", "HP", "DEll", "REZER"]);
// echo leptopName[2];

//php var_dump / ifStatement
// $name = "Hossain Ahmed";
// var_dump($name);
// if (is_string($name)){
//     var_dump ($name);
// }

//php data type
//string "", ''
// $name = 'Smith';
// var_dump ($name) .'</br>';

// integer 
// $x = 34;
// var_dump ($x);

// float
// $z = 10.30;
// var_dump($z);

// // boolean
// $x = true;
// var_dump ($x);


//php arithmetic
//  +, -, *, %

//+

// $x = 10;
// $z=  5;
// echo $x+$z;

// $x = 10;
// $y = 5;
// $z = $x + $y;
// echo $z;

//-
// $x = 10;
// $y = 5;
// $z = $x - $y;
// echo $z;


//*
// $x = 10;
// $y = 5;
// $z = $x * $y;
// echo $z;

//%
// $x = 20;
// $y = 4;
// $z = $x % $y;
// echo $z;


//post increment
// $num = 5;
// for ($i = 0; $i<=10; $i++){
//     echo 'the number is '. $num .'</br>';
//     $num++;
// }

//pre increment
// $num = 5;
// for ($i = 0; $i<=10; $i++){
//     echo 'the number is '. $num .'</br>';
//     --$num;
// }


// for loop
// $x = 'A';
// for ($i=0; $i < 10; $i++) { 
//     echo 'Alphabatic string '.$x .'</br>';
//     $x++;
// }


//and operator
// $x = 100;
// $z = 70;
// if ($x==100 && $z==70){
//     echo "Hello World";
// }


//or operator
// $x = 100;
// $z = 70;
// if ($x==100 || $z==70){
//     echo "Hello World";
// }

//not operator
// $x = 90;
// if ($x !== 100) {
//     echo "Yes";
// } else {
//     echo "No";
// }


// if statement
// $x = 10;
// $y = 20;
// if ($x > $y) {
//     echo 'a grater than b';
// } else if ($x != $y) {
//     echo 'a not equal to b';
// } else if ($x == $y) {
//     echo 'a equal to b';
// } else {
//     echo 'a is greater than b and is not equal to b';
// }


// if statement for wordpress
$x = 50;
if ($x == 10) :
    echo 'x equals 10';
    elseif($x == 20):
        echo 'x equals 20';
    elseif ($x == 30):
        echo 'x equals 30';
    else:
        echo 'a is naither 10, 20, 30';
    endif;


