<?php
/*==========================
    PHP Arithmetic Operators
   ==========================*/
// +, -, *, /, %

// $number = 20;
// $number += 10;
// echo $number;

// assign
// $number = 20;
// $number2 = $number + 10;
// echo $number, "</br>" ,$number2;

// $number =  30;
// $number2 = $number - 20;
// echo $number, "</br>", $number2;

// $number = 20;
// $number -= 10;
// echo $number;

// $number = 20;
// $number *= 10;
// echo $number;

// $number = 12; 
// $number = $number % 3;
// echo $number;



/*==========================
    post-increment
   ==========================*/

// echo 'post-increment:', PHP_EOL;
// $a = 5;
// var_dump($a++);
// var_dump($a);

// echo 'post-increment:',PHP_EOL;
// $num = 10;
// var_dump($num++);
// var_dump($num);


/*==========================
    pre-increment
   ==========================*/
// echo 'pre-increment:', PHP_EOL;
// $num = 20;
// var_dump(++$num);
// var_dump($num);

// echo 'pre-increment:', PHP_EOL;
// $num = 10;
// var_dump(++$num);
// var_dump($num);


/*==========================
    PHP for Loop
   ==========================*/

// echo 'Alphabatic string:'. PHP_EOL;
// $s = 'A';
// for ($i=0; $i<6; $i++){
//     echo $s++ . PHP_EOL;
// }

// $num = 20;
// for($n=0; $n<10; $n++){
//     echo $num++;
// }

// echo (pi()."</br>");
// echo (max(20, 10, 30, 50, 100, -8, -200) ."</br>");
// echo (min(20, 10, 30, 50, 100, -8, -200) ."</br>");
// echo (abs(-8.6));
// echo (round(-8.4));
// echo rand();
// echo rand(1, 10);


/* ===================
    and operator
 =================== */
// $x = 100;
// $y = 50;
// if($x==100 && $y==50){
//     echo 'Hello world!';
// }


/* ===================
    or operator
 =================== */
// $x = 100;
// $z = 40;
// if($x == 100 || $z = 50){
//     echo "Hello world !";
// }

/* ===================
    not operator
 =================== */
// $x = 100;
// if($x !== 100){
//     echo "Yes";
// } else {
//     echo "No";
// }

// $text = 'hello';
// $text1 = 'world';
// $text .= $text1;
// echo $text;


/* ===================
    array
 =================== */

$x = ['a' => 'red' , 'b' => 'green'];
$z = ['a' => 'blue' , 'b' => 'yellow'];
var_dump($x === $z);