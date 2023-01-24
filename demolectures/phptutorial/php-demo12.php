<?php
	$conn = new mysqli('localhost', 'root', '', 'demodbphp');
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql_select = "SELECT * FROM formentry WHERE id='".$_GET['eid']."'";
	$result = $conn->query($sql_select);
		if(!empty($_POST)){
			$sql_update = "UPDATE formentry SET name='".$_POST['name']."', email='".$_POST['email']."' WHERE id='".$_GET['eid']."'";
			$result_update = $conn->query($sql_update);
			if($result_update){
				echo "Record Update Successfully";
				header("refresh: 3; url = http://localhost/phptutorial/php-demo11.php");
			} else {
				echo "Try Again";
			}
		}
 ?>
<!doctype>
<html>
<head>
</head>
<body> 
	<form method="post" action="">  
<h2>PHP Form Edit Example</h2>
<p><span class="error">* required field</span></p>
	<?php foreach($result as $rows){?>

  Name: <input type="text" name="name" value="<?php echo $rows['name']; ?>">
  
  <br><br>
  E-mail: <input type="text" name="email"  value="<?php echo $rows['email']; ?>">
  
  <br><br>
  phone:
  <input type="tel" name="phone"  value="<?php echo $rows['phone']; ?>">
  
	<br><br>		
  GENDER:
  <input type="radio" name="gender" value="male">male
  <input type="radio" name="gender" value="female">female
  
  <br><br>
   address: <textarea name="address" rows="5" cols="20"><?php echo $rows['address']; ?></textarea>
   
  
  <input type="submit" name="submit" value="submit">
 <?php }?>
</form>

</body>
</html>