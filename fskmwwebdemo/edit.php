
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
ob_start();
session_start();
require_once("connect.php");

	if (isset($_POST['back'])) 
	{
	header('location: view.php');
	}

        $bil =$_POST['bil']?? " ";
		$query= "SELECT * FROM licdata WHERE bil='$bil' ";
		$query_run =mysqli_query($conn, $query);
		
		if($query_run)
		{
		     while($row=mysqli_fetch_assoc($query_run))
			 {
			 	 ?>
				 <form method="post" action="" >
				  <input type="hidden" name="bil" value="<?php echo $row['bil'] ?>">


	    <link rel="stylesheet" href="css/insertadmi.css">
		<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
      
        <div class="banner">
          <h3>Lecturer In-Charge (EDIT)</h3>
        </div>
        <div class="item">
           <label for="browser">Course Code:</label>
			   <input list="course_code" name="course_code" onfocus="this.value=''" onchange="this.blur();" placeholder = "Choose Course Code" autocomplete="off" value="<?php echo $row['course_code'] ?>" required>
            
             <datalist id="course_code" >
           
             <option value="CSC116">CSC116</option>
             <option value="CSC126">CSC126</option>
             <option value="CSC134">CSC134</option>
             <option value="CSC159">CSC159</option>
			 <option value="CSC186">CSC186</option>
			 <option value="CSC204">CSC204</option>
			 <option value="CSC248">CSC248</option>
			 <option value="CSC253">CSC253</option>
			 <option value="CSC264">CSC264</option>
		     <option value="CSC305">CSC305</option>
			 <option value="CSC339">CSC339</option>
			 <option value="CSC408">CSC408</option>
			 <option value="ICT200">ICT200</option>
			 <option value="ISP250">ISP250</option>
			 <option value="ITT270">ITT270</option>
			 <option value="ITT300">ITT300</option>
			 <option value="ITT320">ITT320</option>

            </datalist>
 		</div>
        
        <div class="item">
           <label for="browser">Course Name:</label>
			  <input list="course_name" name="course_name" onfocus="this.value=''" onchange="this.blur();" placeholder = "Choose Course Name" autocomplete="off"  value="<?php echo $row['course_name'] ?>"  required>
             
             <datalist id="course_name">
             <option value="INTRODUCTION TO COMPUTERS AND PROGRAMMING">INTRODUCTION TO COMPUTERS AND PROGRAMMING</option>
             <option value="FUNDAMENTALS OF ALGORITHMS AND COMPUTER PROBLEM SOLVING">FUNDAMENTALS OF ALGORITHMS AND COMPUTER PROBLEM SOLVING</option>
             <option value="COMPUTER AND INFORMATION PROCESSING">COMPUTER AND INFORMATION PROCESSING</option>
             <option value="COMPUTER ORGANIZATION">COMPUTER ORGANIZATION</option>
			 <option value="OBJECT ORIENTED PROGRAMMING">OBJECT ORIENTED PROGRAMMING</option>
			 <option value="PRACTICAL APPROACH OF OPERATING SYSTEMS">PRACTICAL APPROACH OF OPERATING SYSTEMS</option>
			 <option value="FUNDAMENTAL OF DATA STRUCTURE">FUNDAMENTAL OF DATA STRUCTURE</option>
			 <option value="INTERACTIVE MULTIMEDIA">INTERACTIVE MULTIMEDIA</option>
			 <option value="WEB APPLICATION DEVELOPMENT">WEB APPLICATION DEVELOPMENT</option>
			 <option value="PRORAMMING PARADIGMS">PRORAMMING PARADIGMS</option>
			 <option value="PRACTICAL TRAINING">PRACTICAL TRAINING</option>
			 <option value="MANAGEMENT INFORMATION SYSTEM">MANAGEMENT INFORMATION SYSTEM</option>
			 <option value="INTRODUCTION TO DATABASE DESIGN">INTRODUCTION TO DATABASE DESIGN</option>
			 <option value="INFORMATION SYSTEM DEVELOPMENT">INFORMATION SYSTEM DEVELOPMENT</option>
			 <option value="DIGITAL ELECTRONIC">DIGITAL ELECTRONIC</option>
			 <option value="INTRODUCTION TO DATA COMMUNICATION AND NETWORKING">INTRODUCTION TO DATA COMMUNICATION AND NETWORKING</option>
			 <option value="INTRODUCTION TO COMPUTER SECURITY">INTRODUCTION TO COMPUTER SECURITY</option>
		</datalist>
        </div>
        <div class="item">
		<label for="lect_id">Lecturer ID:</label>
             	   <input list="lect_id" name="lect_id" onfocus="this.value=''" onchange="this.blur();" placeholder = "Edit Course Code" autocomplete="off"  value="<?php echo $row['lect_id'] ?>"  required>
               <datalist id="lect_id">
           
              <option value="247083">247083</option>
             <option value="146171">146171</option>
			 <option value="166290">166290</option>
             <option value="169475">169475</option>
             <option value="241966">241966</option>
			 <option value="246466">246466</option>
			 <option value="219464">219464</option>
			 <option value="253941">253941</option>
			 <option value="169476">169476</option>
			 <option value="167192">167192</option>
		     <option value="243935">243935</option>
			 <option value="212665">212665</option>
			 <option value="167293">167293</option>
			 <option value="347608">347608</option>
			
			
            </datalist>

        </div>
        <div class="item">
           <label for="browser">Lect Name:</label>
		<input list="lect_name" name="lect_name" onfocus="this.value=''" onchange="this.blur();" placeholder = "Choose Lecturer Name" autocomplete="off" value="<?php echo $row['lect_name'] ?>" required>

             <datalist id="lect_name">
             <option value="Zanariah Idrus">Zanariah Idrus</option>
             <option value="Nor Hafizah Abdul Razak">Nor Hafizah Abdul Razak</option>
             <option value="Dr Taniza Tajuddin">Dr Taniza Tajuddin</option>
             <option value="Shaifizat Mansor">Shaifizat Mansor</option>
			 <option value="Dr Khairul Adilah Ahmad">Dr Khairul Adilah Ahmad</option>
			 <option value="Ts Salehuddin Shuib">Ts Salehuddin Shuib</option>
			 <option value="Jasmin Ilyani Ahmad">Jasmin Ilyani Ahmad</option>
			 <option value="Suhardi Hamid">Suhardi Hamid</option>
			 <option value="Noor Hasnita Abdul Talib">Noor Hasnita Abdul Talib</option>
			 <option value="Siti Rafidah Muhamat Dawam">Siti Rafidah Muhamat Dawam</option>
			 <option value="Siti Nurbaya Ismail">Siti Nurbaya Ismail</option>
			 <option value="Dr Shamsul Jamel Elias">Dr Shamsul Jamel Elias</option>
			 <option value="Dr Mazura Mat Din">Dr Mazura Mat Din</option>
        </datalist>
        </div>
        <div class="item">
           <label for="browser">Session:</label>
		<input list="session" name="session" onfocus="this.value=''" onchange="this.blur();" placeholder = "Choose Session" autocomplete="off" value="<?php echo $row['session'] ?>" required>

             <datalist id="session">
			 <option value="2021">2021</option>
             <option value="2020">2020</option>
             <option value="2019">2019</option>
             <option value="2018">2018</option>
            
        </datalist>
        </div>
        <div class="item">
		<label>Date Start</label>
			<input type="date" name="date_start" value="<?php echo $row['date_start'] ?>" required>

        
        </div>
        <div class="item">
         <label>Date End</label>
			<input type="date" name="date_end" value="<?php echo $row['date_end'] ?>"  required>

          </div>
		<div class="btn-block">
			<button  type="submit" name="update" >Update</button>
		</div>

	    <div class="btn-block">
		    <button type="submit" name="back" >Back</button>
		
		</div>
        </div>
       
      </form>
        </div>
	  </div>
	</div>
  </div>
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
<?php

	if(isset($_POST['update']))
	{
	    $course_code = $_POST['course_code'];
		$course_name = $_POST['course_name'];
		$lect_id = $_POST['lect_id'];
		$lect_name = $_POST['lect_name'];
		$session = $_POST['session'];
		$date_start=date('Y-m-d',strtotime($_POST['date_start']));
		$date_end=date('Y-m-d',strtotime($_POST['date_end']));

		$query= "UPDATE licdata set course_code=' $course_code', course_name='$course_name',lect_id='$lect_id',lect_name='$lect_name',session='$session',date_start='$date_start',date_end='$date_end' WHERE bil='$bil' ";
		$query_run =mysqli_query($conn, $query);

		if($query_run)
		{
		   $_SESSION['status'] = "Data Updated"; 
		   header('location: view.php');
			
		}
		else 
		{
		   	echo "something went wrong";
		}
	
	}

?>

<?php
			 }
			 


		}
		else 
		{
			echo "something went wrong";
		}
ob_end_flush();
?>

	

	