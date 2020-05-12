<?php
require_once(__ROOT__ . "dbconnection/dbConnection.php");
require_once(__ROOT__ . "dbconnection/User.php");

class Doctors extends dbconnect {
	private $Doctors;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->Doctors = array();
		$this->db = $this->connect();
		$result = $this->readDoctors();
		while ($row = $result->fetch_assoc()) {
			array_push($this->users, new User($row["ID"],$row["Name"],$row["Password"],$row["Age"],$row["Phone"],$row["functionality"]));
		}
	}

	function getDoctors() {
		return $this->users;
	}

	function readDoctors(){
		$sql = "SELECT * FROM Doctor";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertDoctor($name, $password, $age, $phone,$functionality){
		$sql = "INSERT INTO Doctor (name, password, age, phone) VALUES ('$name','$password', '$age', '$phone','$functionality')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}