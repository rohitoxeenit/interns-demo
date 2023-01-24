<?php
$conn = new mysqli('localhost', 'root', '', 'demodbphp');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST)){
	//echo "<pre>";
	//print_r($_POST);
	$name =  $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$sql = "INSERT INTO formentry  (name, email, phone, gender, address) VALUES ('$name','$email','$phone','$gender','$address')";
	$result = $conn->query($sql);
	if($result){
		echo "Successfully Insert Data";
	} else {
		echo "Opps Record is not inserted";
	}
	
}
$conn->close();
 ?>
<!doctype>
<html>
<head>
<style>
     center {
		  border:5px solid black;
		  justify-content:center;
	      diplay:flex;
	 }
	
.error {color:#ff0000;}
body { 
           background-image:url("purple.jpg");
		  
}
</style>
</head>
<body> 
 <center>
 <form method="post" action="">  
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>


  Name: <input type="text" name="name">
  
  <br><br>
  E-mail: <input type="text" name="email">
  
  <br><br>
  phone:
  <input type="tel" name="phone">
  
	<br><br>		
  GENDER:
  <input type="radio" name="gender" value="male">male
  <input type="radio" name="gender" value="female">female
  
  <br><br>
   address: <textarea name="address" rows="5" cols="20"></textarea>
   
  
  <input type="submit" name="submit" value="submit">
  
</form>

</center>

</body>
</html>