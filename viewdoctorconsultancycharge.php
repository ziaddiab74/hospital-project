<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM treatment_records WHERE appointmentid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('appointment record deleted successfully..');</script>";
	}
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
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">View Doctor consultancy charges</li></ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>View consultancy charges</h1>
    <form method="post" action="">
  	<table class="order-table">
      <thead>
       <tr>
          <th width="97" scope="col">Date</th>
          <th width="245" scope="col">Decription</th>
          <th width="86" scope="col">Bill Amount</th>
        </tr>
        </thead>
        <tbody>
         <?php
		$sql ="SELECT * FROM billing_records where bill_type='Consultancy Charge' AND bill_type_id='$_SESSION[doctorid]'";
		$qsql = mysqli_query($con,$sql);
		$billamt= 0;
		while($rs = mysqli_fetch_array($qsql))
		{
        echo "<tr>
          	<td>&nbsp;$rs[bill_date]</td>
		 	<td>&nbsp; $rs[bill_type]";

if($rs[bill_type] == "Service Charge")
{
 	 $sqlservice_type1 = "SELECT * FROM service_type WHERE service_type_id='$rs[bill_type_id]'";
	$qsqlservice_type1 = mysqli_query($con,$sqlservice_type1);
	$rsservice_type1 = mysqli_fetch_array($qsqlservice_type1);
	echo " - " . $rsservice_type1[service_type];
}
			

if($rs[bill_type]== "Room Rent")
{
		$sqlroomtariff = "SELECT * FROM room WHERE roomid='$rs[bill_type_id]'";
		$qsqlroomtariff = mysqli_query($con,$sqlroomtariff);
		$rsroomtariff = mysqli_fetch_array($qsqlroomtariff);
		echo " : ". $rsroomtariff[roomtype] .  "- Room No." . $rsroomtariff[roomno];
}

if($rs[bill_type] == "Consultancy Charge")
{
	//Consultancy Charge
	$sqldoctor = "SELECT * FROM doctor WHERE doctorid='$rs[bill_type_id]'";
	$qsqldoctor = mysqli_query($con,$sqldoctor);
	$rsdoctor = mysqli_fetch_array($qsqldoctor);
		echo " - Mr.".$rsdoctor[doctorname];
}

if($rs[bill_type] =="Treatment Cost")
{	
	//Treatment Cost
	$sqltreatment = "SELECT * FROM treatment WHERE treatmentid='$rs[bill_type_id]'";
	$qsqltreatment = mysqli_query($con,$sqltreatment);
	$rstreatment = mysqli_fetch_array($qsqltreatment);
	echo " - ".$rstreatment[treatmenttype];
}

if($rs[bill_type]  == "Prescription charge")
{
	$sqltreatment = "SELECT * FROM prescription WHERE treatmentid='$rs[bill_type_id]'";
	$qsqltreatment = mysqli_query($con,$sqltreatment);
	$rstreatment = mysqli_fetch_array($qsqltreatment);
		
	$sqltreatment1 = "SELECT * FROM treatment_records WHERE treatmentid='$rstreatment[treatment_records_id]'";
	$qsqltreatment1 = mysqli_query($con,$sqltreatment1);
	$rstreatment1 = mysqli_fetch_array($qsqltreatment1);

	$sqltreatment2 = "SELECT * FROM treatment WHERE treatmentid='$rstreatment1[treatmentid]'";
	$qsqltreatment2 = mysqli_query($con,$sqltreatment2);
	$rstreatment2 = mysqli_fetch_array($qsqltreatment2);
	echo 	" - " . $rstreatment2[treatmenttype];
} 

	echo " </td><td>&nbsp;Rs. $rs[bill_amount]</td></tr>";
		$billamt = $billamt +  $rs[bill_amount];
		}
		?>
      </tbody>
    </table>

    <table width="557" border="3">
      <tbody>

		<tr>
		  <th scope="col"><div align="right">Total Earnings &nbsp; </div></th>
		  <td>&nbsp;Rs. <?php echo ($billamt + $taxamt)  - $rsbilling_records[discount] ; ?></td>
	    </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
?>