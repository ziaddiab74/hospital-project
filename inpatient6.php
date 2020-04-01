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

<div class="w3-container" id="services" style="margin-top:10px">
     <div class="dropdown">
  <button type="button" class="w3-bar-item w3-button w3-text-grey w3-xxlarge w3-hover-white dropdown-toggle" data-toggle="dropdown">
  Inpatient Clinics --> Laboratory
  </button>
  <div class="dropdown-menu" style="margin-left:280px">
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Skin</a>
    <a href="inpatient2.php" onclick="w3_close()" class="dropdown-item" href="#">Surgery</a>
    <a href="inpatient3.php" onclick="w3_close()" class="dropdown-item" href="#">Cardiology</a>
    <a href="inpatient4.php" onclick="w3_close()" class="dropdown-item" href="#">Ear,Nose and Throat</a>
    <a href="inpatient5.php" onclick="w3_close()" class="dropdown-item" href="#">Dental</a>
    <a href="inpatient6.php" onclick="w3_close()" class="dropdown-item" href="#">Laboratory</a>
    <a href="inpatient7.php" onclick="w3_close()" class="dropdown-item" href="#">Vascular Surgery</a>
  </div>
</div>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.Khaled</b></p></div>
        <div class="w3-container w3-white ">
        <p>Department:Skin</p>
        <p>Designation:Specialist</p>
<p>Recent Positions:</p>
<p>Asst. Lecturer of surgery MedicineAsst.
<p> Lecturer of surgery MedicineSuez Canal univ</p>

  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
    Book
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Receipt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dr.Ziad
          <p>Date: 20/3/2020
          <p>Waiting Customer: 2
          <p>Time: 6:00pm
          <P>Amount: 200LE

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
    </div>
  </div>
  
</div>

      </div>
      
    </div>
    <!--..............................................................................................................-->
    <div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.YOUSSEF</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Skin
        <p>Designation:Specialist
        <p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah

        <p>Anaesthesia Resident, El Hela</p>
         <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
    Book
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Receipt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dr.Ziad
          <p>Date: 20/3/2020
          <p>Waiting Customer: 2
          <p>Time: 6:00pm
          <P>Amount: 200LE

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
    </div>
  </div>
  
</div>

      </div>
    </div>
    <div class="w3-third w3-container">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.ZIAD</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Skin
<p>Designation:Consultant</p>
<p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah

        <p>Anaesthesia Resident, El Hela</p>
         <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
    Book
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Receipt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dr.Ziad
          <p>Date: 20/3/2020
          <p>Waiting Customer: 2
          <p>Time: 6:00pm
          <P>Amount: 200LE

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
    </div>
  </div>
  
</div>

      </div>
      
    </div>
    
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.MOHAMED</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Skin
<p>Designation:Consultan</p>
<p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah
        <p>Anaesthesia Resident, El Hela</p>
         <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
    Book
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Receipt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dr.Ziad
          <p>Date: 20/3/2020
          <p>Waiting Customer: 2
          <p>Time: 6:00pm
          <P>Amount: 200LE

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
    </div>
  </div>
  
</div>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.AHMAD MOHAMED</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Skin
<P>Designation:Consultant
<p>Recent Positions:
        <p>Anaesthesia Specialist SGH-Jeddah
        <p>Anaesthesia Resident, El Hela</p>
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
    Book
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Receipt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dr.Ziad
          <p>Date: 20/3/2020
          <p>Waiting Customer: 2
          <p>Time: 6:00pm
          <P>Amount: 200LE

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
    </div>
  </div>
  
</div>
      </div>
    </div>
    <div class="w3-third w3-container">
    <div class="w3-container w3-white w3-xlarge ">
        <p><b>DR.KHALED</b></p></div>
        <div class="w3-container w3-white">
        <p>Department:Skin
        <p>Designation:Specialist
        <p>Recent Positions:
<p>Asst. Lecturer of Emergency MedicineAsst.

<p>Lecturer of Emergency MedicineSuez Canal univ.</p>
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
    Book
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Receipt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Dr.Ziad
          <p>Date: 20/3/2020
          <p>Waiting Customer: 2
          <p>Time: 6:00pm
          <P>Amount: 200LE

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      
    </div>
  </div>
  
</div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>
