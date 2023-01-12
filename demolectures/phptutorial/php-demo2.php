<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/M/d") . "<br>";
echo "Today is " . date("d/M/Y") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

$a = 20;  
$b=15;


$a += $b;
$a -= $b;

echo $a;


$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y


$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}

$tt = 15;

if ($tt < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}


$rt = 99;

if ($rt < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?> 
</body>
</html>