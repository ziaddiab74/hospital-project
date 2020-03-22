<!DOCTYPE html>
<html lang="en">
<?php
$mysqli=new mysqli('localhost','root','','clinic');
if($mysqli->connect_error)
{
  echo $mysqli->connect_error;
}
if(isset($_POST["sign"])){
  $fullname=$_POST["fullname"];
  $phone=$_POST["phone"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  $mysqli->query("insert into login(fullname,phone,username,password)values('$fullname','$phone','$username','$password')");
  if(!$mysqli){
      echo mysqli_error();
  }
  else
  {
    header('location:sign.php');

  }
}

?>
  <?php
  include('modals.php');
$mysqli=new mysqli('localhost','root','','clinic');
if($mysqli->connect_error)
{
  echo $mysqli->connect_error;
}
if(isset($_POST["sign"])){
  $username=$_POST["name"];
  $password=$_POST["password"];
  $query="SELECT * FROM login WHERE username='".$username."' AND password='".$password."';";
  $result=mysqli_query($mysqli,$query);
  $row=mysqli_fetch_array($result);
  if(!empty($row)){
    header('location:home.php');
  }
else{
  echo ("Invalid email or password.");
}
}

?>

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

<div class="container mt-2 mb-4">
  <div class="col-sm-8 ml-auto mr-auto">
    <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
      <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a> </li>
      <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a> </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
        <div class="col-sm-12 border border-primary shadow rounded pt-2">
          <form method="post" id="singninFrom">
            <div class="form-group">
              <label class="font-weight-bold">username <span class="text-danger">*</span></label>
              <input type="text" name="name" id="uname1" class="form-control" placeholder="Enter Full name" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
            </div>
            <div class="form-group">
              <input type="submit" name="sign" value="Sign In" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
      
      <!-- !sign up!................................................................... -->
      <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
        <div class="col-sm-12 border border-primary shadow rounded pt-2">
          
          <form method="post" id="singnupFrom">
            <div class="form-group">
              <label class="font-weight-bold">Fullname <span class="text-danger">*</span></label>
              <input type="text" name="fullname" id="signupemail" class="form-control" placeholder="Enter Full name" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Phone #</label>
              <input type="text" name="phone" id="signupphone" class="form-control" placeholder="(000)-(0000000)">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">User Name <span class="text-danger">*</span></label>
              <input type="text" name="username" id="signupusername" class="form-control" placeholder="Choose your user name" required>
              <div class="text-danger"><em>This will be your login name!</em></div>
            </div>
            
            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" id="signuppassword" class="form-control" placeholder="***********" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"
                required>
            </div>
            <div class="form-group">
              <input type="submit" name="sign" value="Sign Up" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 
</body>
</html>