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
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

</style>
</head>

<body>

<i class="glyphicon glyphicon-user"></i>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
  
    <h3 class="w3-padding-64"><b>Cairo<br>Hospital</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>  
    <div class="dropdown">
  <button type="button" class="w3-bar-item w3-button w3-hover-white dropdown-toggle" data-toggle="dropdown">
  Inpatient clinics 
  </button>
  <div class="dropdown-menu">
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Skin</a>
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Surgery</a>
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Cardiology</a>
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Ear,Nose and Throat</a>
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Dental</a>
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Laboratory</a>
    <a href="inpatient.php" onclick="w3_close()" class="dropdown-item" href="#">Vascular Surgery</a>
  </div>
</div>
    <a href="sign.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sign out</a> 
    <a href="aboutus.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About us</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact us</a>
    
  </div>
</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Hospital</b></h1>
    <h1 class="w3-medium"><b>Your health matters</b></h1>    
<br></br>
  </div>

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="55.JPG" alt="Los Angeles" style="width:1000px;length:150px">
    </div>
    <div class="carousel-item">
      <img src="55.JPG" alt="Chicago"style="width:1000px;length:150px">
    </div>
    <div class="carousel-item">
      <img src="55.JPG" alt="New York"style="width:1000px;length:150px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
  <!-- emergency -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Emergency</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    
    <div class="container" style="margin-left:-15px">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Emergency
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Emergency</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Call: 01100036613
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
  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Services</b></h1>
    
    <p>We are a interior design service that focus on what's best for your home and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer. We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) </p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
