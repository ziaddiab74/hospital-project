<?php

require_once(__ROOT__ . "controller/Controller.php");

class UsersController extends Controller{
	public function insert() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$age = $_REQUEST['age'];
		$phone = $_REQUEST['phone'];
		$functionality = $_REQUEST['functionality'];
		$this->model->insertDoctor($name,$password,$age,$phone,$functionality);
	}

	public function edit() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$age = $_REQUEST['age'];
		$phone = $_REQUEST['phone'];
		$functionality = $_REQUEST['functionality'];
		$this->model->editDoctor($name,$password,$age,$phone,$functionality);
	}
	
	public function delete(){
		$this->model->deleteDoctor();
	}
}
?>
