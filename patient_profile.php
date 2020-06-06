<!DOCTYPE html>
<?php 
include('config.php');
session_start();
		$pid	=$_SESSION['user_id']; 
		$sql	="select * from patient_detail where login_id='$pid'";
	
		$row 	= $conn->query($sql);
		$pdtl 	= mysqli_fetch_array($row);	
		
?>
<?php

if(isset($_POST['btnsub']))
{
	$pid=$_POST['patient_id'];
	$gnd=$_POST['gender'];
	$mob=$_POST['mobile_number'];
	$date=$_POST['dob'];
	$add=$_POST['street_address'];
	$ema=$_POST['email'];
	$tim=$_POST['time'];
	$conslt=$_POST['textconsult'];
	$check=$_POST['test'];
	$chkVl="";
	$slNm=$_POST['spl_name'];
	$docNm=$_POST['doct_name'];
	
	//echo count($check).'<br>';exit;
	for($i=0;$i<=count($check);$i++)
	{
		$chkVl.=$check[$i].',';
	}
	
	$sql1="insert into appoint_tbl(patient_id,time_slot,treatment,doct_special,doctid,status)values('$pid','$tim','$chkVl','$slNm','$docNm','1')";
	
	$row 	= $conn->query($sql1);
	header('Location:appointment.php'); 
	

}
?>
	<!DOCTYPE html>
<html lang="en">
  <head>
  <title>HOSPITAL PROJECT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="index.html">Cairo.<span>Hospital</span></a>
	    		</div>
	    		<div class="col-lg-10 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Address: 198 West 21th Street, Australia</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Email: ziaddiab74@l@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">Phone: 01100036613</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Left Sidebar</title>

	<link rel="stylesheet" href="pt_css/assets/demo.css">
	<link rel="stylesheet" href="pt_css/assets/sidebar-left.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<script src="js/jquery-2.1.1.js"></script>
	<!-- stylesheets -->
	<link rel="stylesheet" href="pt_css/font-awesome.css">
	<link rel="stylesheet" href="pt_css/style.css">
	<link rel="stylesheet" href="css/default.css">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">

</head>
<style>
body
{
    background-image:url('image/1.jpg');
	background-size:100% 100%;
	
}
label.form-label {
    display: inline-block;
    width: 30%;
	    font-weight: 400;
		letter-spacing: 1px;
		    vertical-align: top;
			text-align: left;
}
</style>
<body>

	<aside class="sidebar-left" style="width: 200px;">

			
		<a class="company-logo" href="#">Logo</a>

		<div class="sidebar-links">
			<a class="link-blue" href="javascript:patient_pg(1,<?=$pid?>);"><i class="fa fa-keyboard-o"></i>Add Appointment</a>
			<a class="link-red" href="viewappointment.php"><i class="fa fa-keyboard-o"></i>View Appointment</a>
			<a class="link-yellow selected" href="patient_profile.php"><i class="fa fa-keyboard-o"></i>View Profile</a>
			<a class="link-green" href="logout.php"><i class="fa fa-map-marker"></i>Logout</a>
		</div>

	</aside>

	
	<div class="w3ls-banner">
	<!---728x90--->
	<div class="heading">
				<h1>Appoint My Doctor</h1>
				
	</div>
	<!---728x90--->
	
	<div class="main-content">
		<div class="menu">

		<div id="show_login">
		<div class="container" style="width: 918px; margin-top: -121px;">
		
		
			<div class="heading">
				<h2>Please Enter Patients Details</h2>
				<p>Fill the form below and submit your query we will contact you as soon as possible.</p>
			</div>
		
			<div class="agile-form">
				<form action="" method="post">
				<div class="row">
                    <div class="col-md-12">
						 
                    <label class="form-label" style="align:left;"> Full Name 
								<span class="form-required"> * </span>
						</label>
						<div class="form-input" style="align:left;"><?=$pdtl['user_name']?></div>
					</div>
					<br/>
					 <div class="col-md-12">
						 
                    <label class="form-label" style="align:left;"> Email
								<span class="form-required" > * </span>
						</label>
						<div class="form-input" style="align:left;"><?=$pdtl['email']?></div>
					</div>
					<br/>
					<div class="col-md-12">
						 
                    <label class="form-label" style="align:left;"> DOB
								<span class="form-required"> * </span>
						</label>
						<div class="form-input" style="align:left;"><?=$pdtl['dob']?></div>
					</div>
					<br/>
				<div class="col-md-12">
						 
                    <label class="form-label" style="align:left;"> Address
								<span class="form-required"> * </span>
						</label>
						<div class="form-input" style="align:left;"><?=$pdtl['street_address']?></div>
					</div>
					<br/>
				
				</form>	
			</div>
		</div>
		</div>
		<!---728x90--->
		
	</div>

		</div>

	</div>
<div class="copyright">
		<p>© 2017 Appoint My Doctor Form. All rights reserved | Design by <a href="www.w3layouts.com">W3layouts</a></p> 
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>

		$(function () {

			var links = $('.sidebar-links > a');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			})
		});

	</script>
	<script>
	function valtimeslot(id)
	{
		var time='';
		$('#show_err').load('checktime.php?id='+id+'&time='+time);
	}
	function patient_pg(page,id){
		if(page==1)
		{
				$('#show_login').load('addpatient.php?id='+id);}
				if(page==2)
				{
					$('#show_login').load('viewappointment.php');
				}
					if(page==3)
				{
					$('#show_login').load('viewpatient.php');
				}
				
				if(page==4)
				{
					$('#show_login').load('logout.php');
				}	
				
		}
		function showdoctor(id)
		{
			$('#show_doctnm').load('show_doct.php?id='+id);
			
		}
		
		</script>
		

</body>

</html>
