<?php

  require_once("C:\\xampp\\htdocs\\hospital\\dbConnection.php");

?>

<?php
#user edit his profile ---HERE----
class User extends dbconnect {
    private $ID;
    private $UserName;
    private $FullName;

	private $Password;
    private $Age;
    private $Phone;

  function __construct($ID="",$UserName="",$Password="",$Age="",$Phone="",$FullName="") {
    $this->ID = $ID;
    $this->UserName = $UserName;
    $this->Password = $Password;
    $this->Age = $Age;
    $this->Phone = $Phone;
    $this->FullName = $FullName;
	    $this->db = $this->connect();

  }

  function getName() {
    return $this->UserName;
  }
  function setName($UserName) {
    return $this->UserName = $UserName;
  }
  
   function getPassword() {
    return $this->Password;
  }
  function setPassword($Password) {
    return $this->Password = $Password;
  }
  
  function getAge() {
    return $this->Age;
  }
  function setAge($Age) {
    return $this->Age = $Age;
  }
  
  function getPhone() {
    return $this->Phone;
  }
  function setPhone($Phone) {
    return $this->Phone = $Phone;
  }
  function getFullName() {
    return $this->FullName;
  }
  function setFullName($FullName) {
    return $this->FullName = $FullName;
  }
  
  function getID() {
    return $this->ID;
  }


  
  function insertuser($UserName, $Password, $Age, $Phone,$FullName){
    $UserName = $_POST['UserName'];
    $Password=$_POST['Password'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone'];
    $FullName = $_POST['FullName'];

        $sql ="insert into login(UserName,Password,Age,Phone,FullName)values('$UserName','$Password','$Age','$Phone','$FullName');";
        $dbh = new Dbh();
    if($dbh->query($sql) == true  ){
      echo "updated successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . $conn->error;
  }
    
  }
  function editUser($UserName, $Password, $Age, $Phone,$FullName){
      $sql = "update login set UserName='$UserName',Password='$Password', Age='$Age', Phone='$Phone',FullName='$FullName' where ID=$this->ID;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readUser($this->ID);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
  
  function deleteUser(){
	  $sql="delete from login where ID=$this->ID;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}

}