<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_SESSION[patientid]))
{
	echo "<script>window.location='patientaccount.php';</script>";
}
if(isset($_POST[submit]))
{
	$sql = "SELECT * FROM patient WHERE loginid='$_POST[loginid]' AND status='Active'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) >= 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		
		
		$msg = "Kindly enter Login ID: $rslogin[loginid] and Password is : $rslogin[password] to login Healthcare system..";
		?>
<iframe style="visibility:hidden" src="https://ziaddiab.000webhostapp.com/<?php echo $rslogin[mobileno]; ?>&text=<?php echo $msg; ?>&route=1"></iframe>
<?php	
		echo "<script>alert('Login details sent to your registered mobile number...'); </script>";
		echo "<script>window.location='patientlogin.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid login id entered..'); </script>";
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
      <li class="first">Recover Password</li></ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>Kindly enter login detail to recover password..</h1>
    <form method="post" action="" name="frmpatlogin" onSubmit="return validateform()">
    <table width="200" border="3">
      <tbody>
        <tr>
          <td width="34%">Login ID</td>
          <td width="66%"><input type="text" name="loginid" id="loginid" /></td>
        </tr>
        <tr>
          <td height="36" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Recover Password" /></td>
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
<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
	if(document.frmpatlogin.loginid.value == "")
	{
		alert("Login ID should not be empty..");
		document.frmpatlogin.loginid.focus();
		return false;
	}
	else if(!document.frmpatlogin.loginid.value.match(alphanumericExp))
	{
		alert("loginid not valid..");
		document.frmpatlogin.loginid.focus();
		return false;
	}
	else if(document.frmpatlogin.password.value == "")
	{
		alert("Password should not be empty..");
		document.frmpatlogin.password.focus();
		return false;
	}
	else if(document.frmpatlogin.password.value.length < 8)
	{
		alert("Password length should be more than 8 characters...");
		document.frmpatlogin.password.focus();
		return false;
	}
}
	</script>