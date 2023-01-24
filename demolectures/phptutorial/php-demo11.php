<?php
	$conn = new mysqli('localhost', 'root', '', 'demodbphp');
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql_select = "SELECT * FROM formentry ORDER BY ID DESC";
	$result = $conn->query($sql_select);
	
	if(!empty($_GET['id'])){
		$sql_delete = "DELETE FROM formentry WHERE id='".$_GET['id']."'";
		$result_delete = $conn->query($sql_delete);
		if($result_delete){
			echo "Record Deleted Successfully";
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
	<h2>READ/FETCH/ DISPLAY RECORDS FROM DATABASE</h2>
	<table border="1" width="100%">
		<tr>
			<th>Name</th>
			<th>Email-id</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
		<?php 
			if ($result->num_rows > 0) {
			foreach($result as $rows){?>
				<tr>
					<td><?php echo $rows['name'];?></td>
					<td><?php echo $rows['email'];?></td>
					<td><?php echo $rows['phone'];?></td>
					<td><?php echo $rows['gender'];?></td>
					<td><?php echo $rows['address'];?></td>
					<td><a href="php-demo12.php?eid=<?php echo $rows['id'];?>">EDIT</a> | <a href="php-demo11.php?id=<?php echo $rows['id'];?>">DELETE</a> </td>
				</tr>
		<?php } }?>
	</table>

</body>
</html>