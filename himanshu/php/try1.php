<!doctype>
<html>
<body>
<?php
$sub1= 50;
$sub2= 55;
$sub3= 15;
$sub4= 25;
$sub5= 35;
$total =$sub1+$sub2+$sub3+$sub4+$sub5;
echo $total; 
echo "<br>";
$perc= $total/5;
if($perc>=80){
	echo 'A-position';
}   else if($perc>=60){
	echo 'B-position';
}	else if($perc>=40){
	echo 'c-position';
}   else   {
   echo 'fail';
}
?>
</body>
</html>