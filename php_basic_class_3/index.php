<?php
/*====================
    printf
=====================*/
// $firstName = 'Mr.';
// $lastName = 'Hossain';
// printf('My name is %s %s', $firstName, $lastName);
// printf('My name is %2$s %1$s', $firstName, $lastName);
//sprintf
// $name = sprintf('My name is %s %s', $firstName, $lastName);
// echo $name;



/*====================
    php if statement
=====================*/

// $a = 70;
// $b = 60;

// if($a > $b) {
//     echo 'a is gretar than b';
// }

// if (false) {
//     echo 'true';
// } else {
//     echo 'false';
// }

// $a = 50;
// $b = 60;

// if($a > $b) {
//     echo 'a grater than b';
// } elseif ($a === $b) {
//     echo 'a equal to b';
// } elseif ($a != $b) {
//     echo 'a not equal to b';
// } else {
//     echo 'a is greater than b and is not equal to b';
// }


/*====================
    for wordpress
=====================*/

// if($a > $b) {
//     echo 'a grater than b';
// } elseif ($a === $b) {
//     echo 'a equal to b';
// } elseif ($a != $b) {
//     echo 'a not equal to b';
// } else {
//     echo 'a is greater than b and is not equal to b';
// }

// $a = 5;
// if($a == 5):
//     echo "a equals 5";
//     elseif ($a == 6):
//         echo "a equals 6";
//     else:
//         echo 'a is naither 5 or 6';
//     endif;

// $b = 6;
//     if($b == 6):
//         echo "a equals 6";
//     elseif ($b == 7):
//         echo "a equals 7";
//     else:
//         echo "a is naither 6 or 7";
//     endif;

// $num = 10;
// if($num == 10):
//     echo "num equals 10";
// elseif($num == 11):
//     echo "num equals 11";
// else:
//     echo "num is naither 10 or 11";
// endif;

// variable scope
//1. local, 
/* local
    function getLocal(){
    echo 'hello world!';
    }
*/

//2.global,
// $parsonName = "Hossain"; //global
// $parsonPhone = 56754333; //global

// function getNumber(){
//     global $parsonName;
//     echo "My name is $parsonName </br>";
// }
// getNumber();

// function getPnum(){
// echo $GLOBALS['parsonPhone'] ."</br>";
// }
// getPnum();


// $bookName = "English";
// function getSubject(){
//     global $bookName;
//     echo $bookName ."</br>";
// }
// getSubject();


// $smallBro = "Ikram";
// function getSbro(){
//     echo $GLOBALS ['smallBro'] ."</br>";
// }
// getSbro();

// $motherName = "Baby Akter";
// function getMother(){
//     global $motherName;
//     echo $motherName;
// }

// getMother();

// function getMotherName(){
//     echo $GLOBALS ['motherName'];
// }

// getMotherName();


// 3.static


/*====================
    function
=====================*/
//function
//1. built in function
//2. user define function

//user define function
// function getAddress() {
//     echo 'Hello world';
// }
// getAddress();

// $num = 455656544543;
// function getAddress() {
// $num = 455656544543;
//     echo $num;
// }
// getAddress();




/*====================
    ~~ switch ~~
=====================*/

// $favColor = 'red';
// switch ($favColor){
//     case 'red':
//         echo 'you favorite color is red';
//         break;
//     case 'green';
//         echo 'you favorite color is green';
//         break;
//     case 'yellow';
//         echo 'you favorite color is yellow';
//         break;
//     default:
//     echo 'you favorite color is na'
// }


// $leptopName = "HP";
// switch ($leptopName) {
//     case "Lenovo":
//         echo "My laptop is Lenovo";
//     break;
//     case "HP":
//         echo "My laptop is HP";
//     break;
//     case 'Dell':
//         echo "My laptop is Lenovo";
//     break;
//     default:
//     echo "My laptop is Lenovo MAC";
        
// }

/*====================
    ~~ while ~~
=====================*/

// $x = 1;
// while ($x <=5){
//     echo 'the number is  '.$x . '</br>';
//     $x++;
// }

// $num = 1;
// while ($num<=10):
//     echo 'The number is '.$num.'</br>';
//     $num++;
// endwhile;



/*====================
    ~~ do while ~~
=====================*/

// $x = 1;
// do {
//     echo 'The number is '.$x.'</br>';
//     $x++;
// } while ($x <=10);


// $number = 10;
// do{
//     echo 'The number is '.$number.'</br>';
//     $number++;
// }  while ($number <=30);

// $x = 2;
// do{
//     echo 'the number is '.$x. '</br>';
//     $x++;
// } while ($x <=5);

/*====================
    ~~ foreach ~~
=====================*/

// $colors = array("red", "green", "Blue");
// $colors = ["red", "green", "blue"];

// foreach ($colors as $colors) {
//     echo $colors .'</br>';
// }

// foreach($colors as $key => $value) {
//     echo "Key: $key 'Value: $value </br>";
// }

/*====================
    ~~ function ~~
=====================*/

// function abc() {
//     return "Hello world";
// }
// echo abc();


// function sum($x, $y){
//     $z = $x + $y;
//     return $z;
// }

// echo "5 + 10 = " .sum(5, 10);
// echo "10 + 5 = " .sum(10, 5);


/*====================
    ~~ inquire & include ~~
=====================*/
// require "about.php";
// include 'about.php';

// require_once 'about.php';
// include_once 'about.php';

// echo "index.php";

