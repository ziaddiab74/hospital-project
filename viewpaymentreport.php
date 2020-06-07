<?php
session_start();
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM billing_records WHERE billingid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('billing record deleted successfully..');</script>";
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
 <section class="container">
<?php
$sqlbilling_records ="SELECT * FROM billing WHERE appointmentid='$billappointmentid'";
$qsqlbilling_records = mysqli_query($con,$sqlbilling_records);
$rsbilling_records = mysqli_fetch_array($qsqlbilling_records);
?>
 	<table width="1713" border="3">
      <tbody>
        <tr>
          <th scope="col"><div align="right">Bill number &nbsp; </div></th>
          <td><?php echo $rsbilling_records[billingid]; ?></td>
          <td>Appointment Number &nbsp;</td>
          <td><?php echo $rsbilling_records[appointmentid]; ?></td>
        </tr>
        <tr>
          <th width="442" scope="col"><div align="right">Billing Date &nbsp; </div></th>
          <td width="413"><?php echo $rsbilling_records[billingdate]; ?></td>
          <td width="413">Billing time&nbsp; </td>
          	<td width="413"><?php echo $rsbilling_records[billingtime] ; ?></td>
        </tr>
         
		<tr>
          <th scope="col"><div align="right"></div></th>
          <td></td>
          <th scope="col"><div align="right">Bill Amount &nbsp; </div></th>
          <td><?php
		$sql ="SELECT * FROM billing_records where billingid='$rsbilling_records[billingid]'";
		$qsql = mysqli_query($con,$sql);
		$billamt= 0;
		while($rs = mysqli_fetch_array($qsql))
		{
			$billamt = $billamt +  $rs[bill_amount];
		}
?>
  &nbsp;Rs. <?php echo $billamt; ?></td>
        </tr>
        <tr>
          <th width="442" scope="col"><div align="right"></div></th>
          <td width="413">&nbsp;</td>
          <th width="442" scope="col"><div align="right">Tax Amount (5%) &nbsp; </div></th>
          <td width="413">&nbsp;Rs. <?php echo $taxamt = 5 * ($billamt / 100); ?></td>
       	</tr>
         
		<tr>
		  <th scope="col"><div align="right">Disount reason</div></th>
		  <td rowspan="4" valign="top"><?php echo $rsbilling_records[discountreason]; ?></td>
		  <th scope="col"><div align="right">Discount &nbsp; </div></th>
		  <td>&nbsp;Rs. <?php echo $rsbilling_records[discount]; ?></td>
	    </tr>
        
		<tr>
		  <th rowspan="3" scope="col">&nbsp;</th>
		  <th scope="col"><div align="right">Grand Total &nbsp; </div></th>
		  <td>&nbsp;Rs. <?php echo $grandtotal = ($billamt + $taxamt)  - $rsbilling_records[discount] ; ?></td>
	    </tr>
		<tr>
		  <th scope="col"><div align="right">Paid Amount </div></th>
		  <td>Rs. <?php
		  	$sqlpayment ="SELECT sum(paidamount) FROM payment where appointmentid='$billappointmentid'";
			$qsqlpayment = mysqli_query($con,$sqlpayment);
			$rspayment = mysqli_fetch_array($qsqlpayment);
			echo $rspayment[0];		  
		   ?></td>
	    </tr>
		<tr>
		  <th scope="col"><div align="right">Balance Amount</div></th>
		  <td>Rs. <?php echo $balanceamt = $grandtotal - $rspayment[0]  ; ?></td>
	    </tr>
      </tbody>
    </table>
   <p><strong>Payment report:</strong></p>
<?php
$sqlpayment = "SELECT * FROM payment where appointmentid='$billappointmentid'";
$qsqlpayment = mysqli_query($con,$sqlpayment);
if(mysqli_num_rows($qsqlpayment) == 0)
{
	echo "<strong>No transaction details found..</strong>";
}
else
{
?>
   <table width="840" border="3">
     <tbody>
       <tr>
         <th scope="col">Paid Date</th>
         <th scope="col">Paid time</th>
         <th scope="col">Paid amount</th>
       </tr>
<?php       
		while($rspayment = mysqli_fetch_array($qsqlpayment))
		{
		?>
			   <tr>
				 <td>&nbsp;<?php echo $rspayment[paiddate]; ?></td>
				 <td>&nbsp;<?php echo $rspayment[paidtime]; ?></td>
				 <td>&nbsp;Rs. <?php echo $rspayment[paidamount]; ?></td>
			   </tr>
		<?php
		}
?>

     </tbody>
   </table>
<?php
}
?>   
   <p><strong></strong></p>
</section>