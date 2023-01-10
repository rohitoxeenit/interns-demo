<?php

echo 'Hello ghow are you';
echo "<br/>";

echo "hello how are you";

/******* Declaration of varibale in php ********/

$age=37;
$fullname = "Rohit Dhiman is a good man";
echo $age;

echo "<br/>";

echo $fullname;

echo "<br/>";

echo 'My Name is: '.$fullname.' & age :'.$age.'yrs';

print('My Name is: '.$fullname.' & age :'.$age.'yrs');

$price=13.4944000;
echo number_format($price,3);

echo "<br/>";

echo 'String length calculate: '.strlen($fullname);
echo "<br/>";
echo 'String Word calculate: '.str_word_count($fullname);
echo "<br/>";
echo 'Reverse of String: '.strrev($fullname);
echo "<br/>";
echo 'Reverse of String: '.strpos($fullname,'good');
echo "<br/>";
echo 'Replace Text Within a String.'.str_replace('good','bad',$fullname);

echo "<br/>";
echo(pi()); // returns 3.1415926535898
echo "<br/>";
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "<br/>";
echo(abs(-6.7));  // returns 6.7
echo "<br/>";
echo(sqrt(64));  // returns 8
echo "<br/>";
echo(round(0.60));  // returns 1
echo "<br/>";
echo(round(0.49));  // returns 0
echo "<br/>";
echo(rand());
echo "<br/>";
echo(rand(10, 1000));
echo "<br/>";
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;


echo "<br/>";
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
echo "<br/>";
/*define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
print_r(cars);*/
echo "<br/>";




$a=15;
$b=22;
$c = $a - $b;

echo $a+$b;

echo "<br/>";
echo $c;
echo "<br/>";
echo $a * $b;
echo "<br/>";
echo $a / $b;
echo "<br/>";
echo $a % $b;
?> 
