
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>fskmmerbok</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="fskmmerbok" />
	<meta name="keywords" content="fskmmerbok" />
	<meta name="author" content="fskmmerbok" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">



	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="home.html"><img src="images/logo.jpg" alt="logo" width="120" height="50"><span></span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
					
								<li><a href="activity.html">About</a></li>
							<li class="has-dropdown">
								<a href="directory.html">Directory</a>
								<ul class="dropdown">
									<li><a href="https://kedah.uitm.edu.my/directory/academic-staff" target="_blank">1.Academic Staff</a></li>
									<li><a href="#">2.Publication</a></li>
									<li><a href="#">3.Innovation</a></li>
								
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="program.html">Program</a>
								<ul class="dropdown">
									<li><a href="#"> CS 110</a></li>
									<li><a href="#"> CS 259</a></li>

								</ul>
							</li>
							


							<li class="has-dropdown">
								<a href="research.html">Industrial Linkage</a>
								<ul class="dropdown">
									<li><a href="#">1.Research Grant</a></li>
									<li><a href="#">2.Consultancies</a></li>
									<li><a href="#">3.MOU/MOA</a></li>
								
								</ul>
							</li>
							<li><a href="activity.html">Activity</a></li>
							<li><a href="lic.html">LiC</a></li>
								<li class="has-dropdown">
								<a href="links.html">Links</a>
								<ul class="dropdown">
									<li><a href="#">1.E-Course File</a></li>
									<li><a href="#">2.Propens</a></li>
									<li><a href="#">3.Mentor/Mentee</a></li>
									<li><a href="#">4.Student Profile</a></li>
								
								</ul>
							</li>
							<li><a href="contactus.html">Contact</a></li>
						
							<li class="btn-cta"><a href="#"><span>Logout</span></a></li>

							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
<?php 
session_start();

    require_once("connect.php");

    $query = " select * from licdata ";
    $result = mysqli_query($conn,$query);


	 $columns = array('course_code','course_name','lect_id','lect_name','session','date_start','date_end');
     $column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];
     $sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

  	 if ($result = $conn->query('SELECT * FROM licdata ORDER BY ' .  $column . ' ' . $sort_order)) {
	// Some variables we need for the table.
	$up_or_down = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
	$asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
	$add_class = ' class="highlight"';

if (isset($_SESSION['status'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['status']; 
			unset($_SESSION['status']);
		?>
	</div>
<?php endif ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/viewcss.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <title>View Records</title>
	<center>
	<button type="submit" class="button-21" role="button"onclick="document.location='index.php'">Add Data</button>
	<button type="submit" class="button-21" role="button" onclick="document.location='search.php'">Search Data</button>
	</center>

</head>
<body class="bg-dark">

                            <div class ="container">
                            <table id="customers">

                            <tr>
                           
                               <th><a href="view.php?column=course_code&order=<?php echo $asc_or_desc; ?>">Course Code<i class="fas fa-sort<?php echo $column == 'course_code' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					           <th><a href="view.php?column=course_name&order=<?php echo $asc_or_desc; ?>">Course Name<i class="fas fa-sort<?php echo $column == 'course_name' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					           <th><a href="view.php?column=lect_id&order=<?php echo $asc_or_desc; ?>">Lecturer ID<i class="fas fa-sort<?php echo $column == 'lect_id' ? '-' . $up_or_down : ''; ?>"></i></a></th>
							   <th><a href="view.php?column=lect_name&order=<?php echo $asc_or_desc; ?>">Lecturer Name<i class="fas fa-sort<?php echo $column == 'lect_name' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					           <th><a href="view.php?column=session&order=<?php echo $asc_or_desc; ?>">Session<i class="fas fa-sort<?php echo $column == 'session' ? '-' . $up_or_down : ''; ?>"></i></a></th>
					           <th><a href="view.php?column=date_start&order=<?php echo $asc_or_desc; ?>"> Date Start<i class="fas fa-sort<?php echo $column == 'date_start' ? '-' . $up_or_down : ''; ?>"></i></a></th>
							   <th><a href="view.php?column=date_end&order=<?php echo $asc_or_desc; ?>"> Date End<i class="fas fa-sort<?php echo $column == 'date_end' ? '-' . $up_or_down : ''; ?>"></i></a></th>
								 
                               <th> Edit  </th>
                                
							   <th> Delete </th>
                            </tr>

                            <?php 
							
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                        $course_code = $row['course_code'];
                                        $course_name = $row['course_name'];
                                        $lect_id = $row['lect_id'];
										$lect_name = $row['lect_name'];
										$session = $row['session'];
										$date_start = $row['date_start'];
										$date_end = $row['date_end'];
                            ?>
                                    <tr>
                                    
                                     <td<?php echo $column == 'course_code' ? $add_class : ''; ?>><?php echo $row['course_code']; ?></td>
					                 <td<?php echo $column == 'course_name' ? $add_class : ''; ?>><?php echo $row['course_name']; ?></td>
					                 <td<?php echo $column == 'lect_id' ? $add_class : ''; ?>><?php echo $row['lect_id']; ?></td>
									 <td<?php echo $column == 'lect_name' ? $add_class : ''; ?>><?php echo $row['lect_name']; ?></td>
					                 <td<?php echo $column == 'session' ? $add_class : ''; ?>><?php echo $row['session']; ?></td>
					                 <td<?php echo $column == 'date_start' ? $add_class : ''; ?>><?php echo $row['date_start']; ?></td>
									 <td<?php echo $column == 'date_end' ? $add_class : ''; ?>><?php echo $row['date_end']; ?></td>
									 

				

										<form method="post" action="edit.php" >
										<input type="hidden" name="bil" value="<?php echo $row['bil'] ?>">
										<td><button Onclick="return ConfirmEdit();" type="submit" name="edit" class="buttonedit" value="1">Edit</button></td>
										</form>

									    <form method="post" action="delete.php" >
										<input type="hidden" name="bil" value="<?php echo $row['bil'] ?>">
										<td><button Onclick="return ConfirmDelete();" type="submit" name="delete" class="buttondel" value="1">Delete</button></td>
									
                                      </form>
                                    </tr>      
									
                            <?php 
                                    } 
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    

<?php
	$result->free();
}
?>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


  
	</script>
  </body>
</html>
<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>    

<script>
    function ConfirmEdit()
    {
      var x = confirm("Are you sure you want to edit this data?");
      if (x)
          return true;
      else
        return false;
    }
	setTimeout(function() {
    $('.msg').fadeOut('fast');
}, 2500); 
</script>   
<style>
.msg {
  width:50%;
  margin:20px auto;
  padding:30px;
  position:relative;
  border-radius:5px;
  box-shadow:0 0 15px 5px #ccc;
  color: black; 
  background: #dff0d8; 
  font-size: 100%;
  font-family: "Lucida Console", "Courier New", monospace;

}

th:hover {
	background-color: #64686e;
}
th a {
	display: block;
	text-decoration:none;
	padding: 10px;
	color: #ffffff;
	font-weight: bold;
	font-size: 15px;
}
th a i {
	margin-left: 5px;
	color: rgba(255,255,255,0.4);
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  
}




</style>
