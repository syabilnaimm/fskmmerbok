<?php
session_start();
require_once("connect.php");


if (isset($_POST['update'])) {
	    $bil = $_POST['bil'];
	    $course_code = $_POST['course_code'];
		$course_name = $_POST['course_name'];
		$lect_id = $_POST['lect_id'];
		$lect_name = $_POST['lect_name'];
		$date_start=date('Y-m-d',strtotime($_POST['date_start']));
		$date_end=date('Y-m-d',strtotime($_POST['date_end']));

		
		mysqli_query($conn, "UPDATE info SET course_code='$course_code', course_name='$course_name',lect_id='$lect_id',lect_name='$lect_name',date_start='$date_start',date_end='$date_end' WHERE bil=$bil");
	    $_SESSION['status'] = "Address updated!"; 
	    header('location: index.php');

	
}
?>