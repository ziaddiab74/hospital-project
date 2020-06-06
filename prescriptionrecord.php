<?php
include("header.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	 $sql ="DELETE FROM prescription_records WHERE prescription_record_id='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
			echo "<script>window.location='prescriptionrecord.php?prescriptionid=$_GET[prescriptionid]';</script>";
		echo "<script>alert('prescription deleted successfully..');</script>";
	}
}
if(isset($_POST[submit]))
{
	if(isset($_GET[editid]))
	{
			$sql ="UPDATE prescription_records SET prescription_id='$_POST[prescriptionid]',medicine_name='$_POST[medicine]',cost='$_POST[cost]',unit='$_POST[unit]',dosage='$_POST[select2]',status=' $_POST[select]' WHERE prescription_record_id='$_GET[editid]'";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('prescription record updated successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}	
	}
	else
	{
		$sql ="INSERT INTO prescription_records(prescription_id,medicine_name,cost,unit,dosage,status) values('$_POST[prescriptionid]','$_POST[medicineid]','$_POST[cost]','$_POST[unit]','$_POST[select2]','Active')";
		if($qsql = mysqli_query($con,$sql))
		{	
			$presamt=$_POST[cost]*$_POST[unit];
			$billtype = "Prescription update";
			$prescriptionid= $_POST[prescriptionid];
			include("insertbillingrecord.php");
			echo "<script>alert('prescription record inserted successfully...');</script>";
			echo "<script>window.location='prescriptionrecord.php?prescriptionid=$_GET[prescriptionid]&patientid=$_GET[patientid]&appid=$_GET[appid]';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM prescription_records WHERE prescription_record_id='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
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
      <li class="first">Add New Prescription Record</li></ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
 <table width="200" border="3">
      <tbody>
        <tr>
          <td><strong>Doctor</strong></td>
          <td><strong>Patient</strong></td>
          <td><strong>Prescription Date</strong></td>
          <td><strong>Status</strong></td>
        </tr>
          <?php
		$sql ="SELECT * FROM prescription WHERE prescriptionid='$_GET[prescriptionid]'";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
			$sqlpatient = "SELECT * FROM patient WHERE patientid='$rs[patientid]'";
			$qsqlpatient = mysqli_query($con,$sqlpatient);
			$rspatient = mysqli_fetch_array($qsqlpatient);
			
			
		$sqldoctor = "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
			$qsqldoctor = mysqli_query($con,$sqldoctor);
			$rsdoctor = mysqli_fetch_array($qsqldoctor);
			
        echo "<tr>
          <td>&nbsp;$rsdoctor[doctorname]</td>
          <td>&nbsp;$rspatient[patientname]</td>
		   <td>&nbsp;$rs[prescriptiondate]</td>
		<td>&nbsp;$rs[status]</td>
		
        </tr>";
		}
		?>
      </tbody>
    </table>
	
	<hr>
  <h1>Add Prescription record</h1>
           <?php
			if(!isset($_SESSION[patientid]))
			{
		  ?>  
<form method="post" action="" name="frmpresrecord" onSubmit="return validateform()"> 
  <input type="hidden" name="prescriptionid" value="<?php echo $_GET[prescriptionid]; ?>"  />
    <table width="200" border="3">
      <tbody>
      
        <tr>
          <td width="34%">Medicine</td>
          <td width="66%">
		  <select name="medicineid" id="medicineid" onchange="loadmedicine(this.value)">
		  <option value="">Select Medicine</option>
		  <?php
		$sqlmedicine ="SELECT * FROM medicine WHERE status='Active'";
		$qsqlmedicine = mysqli_query($con,$sqlmedicine);
		while($rsmedicine = mysqli_fetch_array($qsqlmedicine))
		{
			echo "<option value='$rsmedicine[medicineid]'>$rsmedicine[medicinename] ( ₹ $rsmedicine[medicinecost] )</option>";
		}
		?>
		  </select>
		  </td>
        </tr>
        <tr>
          <td>Cost</td>
          <td><input type="text" name="cost" id="cost" value="<?php echo $rsedit['cost']; ?>" readonly style="background-color:pink;" /></td>
        </tr>
        <tr>
          <td>Unit</td>
          <td><input type="number" min="1" name="unit" id="unit" value="<?php echo $rsedit[unit]; ?>" onkeyup="calctotalcost(cost.value,this.value)" onchange="" /></td>
        </tr>
        <tr>
          <td>Total Cost</td>
          <td><input type="text" name="totcost" id="totcost" value="<?php echo $rsedit['cost']; ?>" readonly style="background-color:pink;" /></td>
        </tr>
        <tr>
          <td>Dosage</td>
          <td><select name="select2" id="select2">
           <option value="">Select</option>
          <?php
		  $arr = array("0-0-1","0-1-1","1-0-1","1-1-1","1-1-0","0-1-0","1-0-0");
		  foreach($arr as $val)
		  {
			 if($val == $rsedit[dosage])
			  {
			  echo "<option value='$val' selected>$val</option>";
			  }
			  else
			  {
				  echo "<option value='$val'>$val</option>";			  
			  }
		  }
		  ?>
          </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /> </td>
        </tr>
      </tbody>
    </table>
    </form>
    <?php
			}
		?>
    
  <h1>View Prescription record</h1>
    <table width="200" border="3">
      <tbody>
        <tr>
          <td><strong>Medicine</strong></td>
          <td><strong>Dosage</strong></td>
          <td><strong>Cost</strong></td>
          <td><strong>Unit</strong></td>
          <td><strong>Total Cost</strong></td>
                    <?php
			if(!isset($_SESSION[patientid]))
			{
		  ?>  
          <td><strong>Action</strong></td>
          <?php
			}
			?>
        </tr>
         <?php
		 $gtotal=0;
		$sql ="SELECT * FROM prescription_records LEFT JOIN medicine on prescription_records.medicine_name=medicine.medicineid WHERE prescription_id='$_GET[prescriptionid]'";
		$qsql = mysqli_query($con,$sql);
		while($rs = mysqli_fetch_array($qsql))
		{
        echo "<tr>
          <td>&nbsp;$rs[medicinename]</td>
		    <td>&nbsp;$rs[dosage]</td>
          <td>&nbsp;₹$rs[cost]</td>
		   <td>&nbsp;$rs[unit]</td>
		   <td  align='right'>₹" . $rs[cost] * $rs[unit] . "</td>";
			if(!isset($_SESSION[patientid]))
			{
			 echo " <td>&nbsp; <a href='prescriptionrecord.php?delid=$rs[prescription_record_id]&prescriptionid=$_GET[prescriptionid]'>Delete</a> </td>"; 
			}
		echo "</tr>";
		$gtotal = $gtotal+($rs[cost] * $rs[unit]);
		}
		?>
        <tr>
          <th colspan="4" align="right">Grand Total - </th>
		  <th align="right">₹<?php echo $gtotal; ?></th>
		  <td></td>
          </tr>
        <tr>
          <td colspan="6"><div align="center">
            <input type="submit" name="print" id="print" value="Print" onclick="myFunction()"/>
          </div></td>
          </tr>
      </tbody>
    </table>
	
	<table>
	<tr><td>
	 <center><a href='patientreport.php?patientid=<?php echo $_GET[patientid]; ?>&appointmentid=<?php echo $_GET[appid]; ?>'><strong>View Patient Report>></strong></a></center>
	</td></tr>
	</table>
<script>
function myFunction() {
    window.print();
}
</script>


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
<script type="application/javascript">
function loadmedicine(medicineid)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("totcost").value = this.responseText;
			document.getElementById("cost").value = this.responseText;
			document.getElementById("unit").value = 1;
		} 
	};
	xmlhttp.open("GET","ajaxmedicine.php?medicineid="+medicineid,true);
	xmlhttp.send();
}

function calctotalcost(cost,qty)
{
	 document.getElementById("totcost").value = parseFloat(cost) * parseFloat(qty);
} 

function validateform()
{
	if(document.frmpresrecord.prescriptionid.value == "")
	{
		alert("Prescription id should not be empty..");
		document.frmpresrecord.prescriptionid.focus();
		return false;
	}
	else if(document.frmpresrecord.medicine.value == "")
	{
		alert("Medicine field should not be empty..");
		document.frmpresrecord.medicine.focus();
		return false;
	}
	else if(document.frmpresrecord.cost.value == "")
	{
		alert("Cost should not be empty..");
		document.frmpresrecord.cost.focus();
		return false;
	}
	else if(document.frmpresrecord.unit.value == "")
	{
		alert("Unit should not be empty..");
		document.frmpresrecord.unit.focus();
		return false;
	}
	else if(document.frmpresrecord.select2.value == "")
	{
		alert("Dosage should not be empty..");
		document.frmpresrecord.select2.focus();
		return false;
	}
	else if(document.frmpresrecord.select.value == "" )
	{
		alert("Kindly select the status..");
		document.frmpresrecord.select.focus();
		return false;
	}
	else
	{
		return true;
	}
	
}
</script>