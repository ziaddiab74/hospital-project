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
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

<body> 
<?php include('header.php'); ?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


  <!-- Header -->
  <header id="portfolio">
    
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>INPATIENT CLINICS</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
    <a href="inpatient.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Surgery</button>
    <a href="inpatient2.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Skin</button>
    <a href="inpatient3.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Cardiology</button>
    <a href="inpatient4.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Ear,Nose and Throat</button>
    <a href="inpatient5.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Dental</button>
    <a href="inpatient6.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Laboratory</button>
    <a href="inpatient7.php"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Vascular Surgery</button>
    </div>
    
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.AHMAD</b></p></div>
        <div class="w3-container w3-white ">
        <p>Department:Surgery</p>
        <p>Designation:Specialist</p>
<p>Recent Positions:</p>
<p>Asst. Lecturer of surgery MedicineAsst.
<p> Lecturer of surgery MedicineSuez Canal univ</p>
      <button id="submitSignUp" class="btn btn-success btn-lg btn-block">book</button>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.YOUSSEF</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Anaesthesia
        <p>Designation:Specialist
        <p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah

        <p>Anaesthesia Resident, El Hela</p>
        <button id="book" class="btn btn-success btn-lg btn-block">book</button>

      </div>
    </div>
    <div class="w3-third w3-container">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.ZIAD</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Cardiology
<p>Designation:Consultant</p>
<p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah

        <p>Anaesthesia Resident, El Hela</p>
        <button id="book" class="btn btn-success btn-lg btn-block">book</button>

      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.MOHAMED</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Internal Medicine/GIT & Endoscopy
<p>Designation:Consultan</p>
<p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah
        <p>Anaesthesia Resident, El Hela</p>
        <button id="book" class="btn btn-success btn-lg btn-block">book</button>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.AHMAD MOHAMED</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Neurosurgery
<P>Designation:Consultant
<p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah
        <p>Anaesthesia Resident, El Hela</p>
        <button id="book" class="btn btn-success btn-lg btn-block">book</button>

      </div>
    </div>
    <div class="w3-third w3-container">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.KHALED</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Emergency
        <p>Designation:Specialist
        <p>Recent Positions:
<p>Asst. Lecturer of Emergency MedicineAsst.

<p>Lecturer of Emergency MedicineSuez Canal univ.</p>
        <button id="book" class="btn btn-success btn-lg btn-block">book</button>

      </div>
    </div>
  </div>
  </div>


<?php include('footer.php'); ?>
</body>
</html>
