<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
$i=0;    
foreach( $cars as $k){
	echo 'Array Loop Count: '.$i;
	 echo "<br/>"; echo "<br/>";
 foreach ($k as $car_array_keys => $car_value){
	 //echo "<pre>";
	 //print_r($car_value);
	 echo 'Array Key: '.$car_array_keys.' == '.$car_value;
	 echo "<br/>";
 }
  echo "<br/>";
$i++;
}
?>

</body>
</html>
