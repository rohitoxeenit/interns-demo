<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['formsubmit'])){
	echo('<pre>');
	print_r($_POST);
	// now the things is to store form data into database
	
	
	
}

?>
<html>
<body>

<!--<form action="" method="GET">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
<input type="submit" name="formsubmit">
</form>
-->
<form action="" method="POST">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	<input type="hidden" name="empid" value="emp0001"><br>
<input type="submit" name="formsubmit">
</form>


</body>
</html> 