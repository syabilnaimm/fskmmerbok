<?php 
session_start();

	include_once('connect.php');


	// initialize variables(not necessary)
	
	$course_name = "";
	

	if (isset($_POST['add'])) {
		$course_name = $_POST['course_name'];
		

		$query= "INSERT INTO licdata (course_name) VALUES ( '$course_name')"; 
		$query_run =mysqli_query($conn, $query);

		if($query_run)
		{
			$_SESSION['status'] = "Data saved"; 
			header('location: index.php');
		}
		else
		{
		echo "something went wrong";
		
		}

	}
	?>
	<html>

	<div class="input-group">
		
			<label>name course</label>
			<input type="text" name="course_name" value="">
			  
		</div>

		<div class="input-group">
			<button class="btn" type="submit" name="add" >Save</button>
		</div>
	</html>