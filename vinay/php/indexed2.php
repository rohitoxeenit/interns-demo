 <!doctype>
<html>
<body>
<?php
 $cars= array("alto" , "nano" , "maruti");
 $a = count($cars);
  // for loop
	 for($x=0;$x<$a ;$x++)
	 {
		 echo $cars[$x];
		 echo "<br>";
		
}
  // foreach loop
foreach ($cars as $carlist) {
  echo "<pre>";
  print_r($carlist);
}
	 
 ?>
</body>
</html>