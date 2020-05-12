<?php
  require_once(__ROOT__ . "dbConnection.php");
?>

<?php
#user edit his profile ---HERE----
class Doctor extends dbConnect {
    private $id;
    private $name;
  	private $password;
    private $age;
    private $phone;
    public $functionality;

  function __construct($id,$name="",$password="",$age="",$phone="",$functionality="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$name){
      $this->readDoctor($id);
    }else{
      $this->name = $name;
	  $this->password=$password;
      $this->age = $age;
      $this->phone = $phone;
      $this->functionality=$functionality;
    }
  }

  function getName() {
    return $this->name;
  }
  function setName($name) {
    return $this->name = $name;
  }
  
   function getPassword() {
    return $this->password;
  }
  function setPassword($password) {
    return $this->password = $password;
  }
  
  function getAge() {
    return $this->age;
  }
  function setAge($age) {
    return $this->age = $age;
  }
  
  function getPhone() {
    return $this->phone;
  }
  function setPhone($phone) {
    return $this->phone = $phone;
  }
  function getfunctionality(){
    return $this->functionality;
  }
  function setfunctionality(){
    return $this->functionality = $functionality;
  }
  function getID() {
    return $this->id;
  }
}

  function readDoctor($id){
    $sql = "SELECT * FROM user where ID=".$id;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
        $row = $db->fetchRow();
        $this->name = $row["Name"];
		$_SESSION["Name"]=$row["Name"];
		$this->password=$row["Password"];
        $this->age = $row["Age"];
        $this->phone = $row["Phone"];
        $this->functionality=$row["functionality"]
    }
    else {
        $this->name = "";
		$this->password="";
        $this->age = "";
        $this->phone = "";
        $this->functionality="";
    }
  }
  
  function editDoctor($name, $password, $age, $phone,$functionality){
      $sql = "update user set name='$name',password='$password', age='$age', phone='$phone',functionality='$functionality' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readDoctor($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }

  }
  
  function deleteDoctor(){
	  $sql="delete from user where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
	 
}