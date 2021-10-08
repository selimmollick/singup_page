<?php
include 'dbcon.php';


// Get id from URL to delete that user
if (isset($_GET['deleteid'])) {
	$id= $_GET['deleteid'];

	$sql="delete form 'registration' where id=$id";
	$result=mysqli_query($con,$sql);

	if ($result) {
		?>
			<script>
				// alert("connection successful");
			</script>
		<?php
	}else{
		?>
			<script>
				// alert("no connection");
			</script>
		<?php
	}
}
?>