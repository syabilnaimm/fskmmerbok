<?php
session_start();
  require_once("connect.php");


  if(isset($_POST['delete']))
  {
  	  $bil =$_POST['bil'];
	  $query="DELETE FROM licdata where bil='$bil'";
	  $query_run=mysqli_query($conn,$query);

	  if($query_run)
		{
			$_SESSION['status'] = "Data Deleted"; 
			header('location: view.php');
		}
		else
		{
		echo "something went wrong";
		
		}

	}
?>