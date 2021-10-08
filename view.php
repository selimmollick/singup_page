
<link rel="stylesheet" type="text/css" href="css/style.css">
 <!-- <php rel="stylesheet" type="text/css" href="css/style.css"> -->
<?php

		include 'dbcon.php';
		$sql = "SELECT * FROM registration";
		$query = mysqli_query($con,$sql);
		
		?>
		<center><button><a href="registration.php">Register</a></button></center>
<center><table border="1">
	<thead>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>dbo</th>
		<th>gender</th>
		<th>update</th>
		<th>Delete</th>
	</thead>
	<tbody>

		<?php
		foreach ($query as $key => $value) {
			
		
		?>
	
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['phone']; ?></td>
			<td><?php echo $value['age']; ?></td>
			<td><?php echo $value['gender']; ?></td>
			<td>
				<button><a href="update.php">Update</a></button>
			</td>
			<td>
				<button><a href="delete.php? delete='.$id.'">Delete</a></button>
			</td>
		</tr>
	<?php 
		} 
	?>

	</tbody>
</table>
</center>



 