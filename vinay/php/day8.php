<!doctype>
<html>
<head>
      <title>day-2 of php</title>
</head>
<body>
<?php
echo "today " . date("D-M-Y") . "<br>";
echo "today " . date("D/M/Y") . "<br>";
echo "today " . date("d.m.y") . "<br>";
echo "today " . date("l") . "<br>"; 
echo "time is " . date("h:i:sa");
echo "<br>";
date_default_timezone_set("America/New_York");
echo "The time in america " . date("h:i:sa");
echo "<br>";
echo "today " . date("h:i:sa.D-M-Y") . "<br>";
$t = date("20");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
</body>     	  
</html>