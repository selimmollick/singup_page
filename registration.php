


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Attendence Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	
		include 'dbcon.php';

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$age = $_POST['age'];
			$gender =$_POST['gender'];
			$email =$_POST['email'];
			$phone =$_POST['phone'];
			// echo $name;exit();


			$insertquery = "insert into registration(name, age, gender, email, phone) VALUES ('$name', '$age', '$gender', '$email', '$phone')";

			$iquery = mysqli_query($con,$insertquery);
			header('location:view.php');


		}

	?>

	<form action="registration.php" method="POST">	
		<div class="main_div">
			<center><h1>Restaurant Menu</h1></center>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Name:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="name" id="name" placeholder="Enter your name..."required>
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">DBO:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="age" id="age"placeholder="Enter your age..."required>
				</div>
			</div>
			<div style="clear: both"></div> 
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Gender:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="gender" id="gender"placeholder="Enter your Gender..."required>
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Email:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="email" id="email"placeholder="Enter your email..."required>
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Phone:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="phone" id="phone"placeholder="Enter your number..."required>
				</div>
			</div>
			
			<center><input class="submit button" type="submit" value="submit" name="submit"></center>
		</div>


	</form>

	<!-- <script type="index.js"></script> -->
	
</body>
</html>
<center><a href="view.php">View Records</a></center>