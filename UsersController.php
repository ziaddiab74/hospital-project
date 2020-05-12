<?php

require_once("C:\\xampp\\htdocs\\hospital\\controller\\Controller.php");

class UsersController extends Controller{
	public function insert() {
		$FullName = $_REQUEST['FullName'];
		$Age = $_REQUEST['Age'];
		$Phone = $_REQUEST['Phone'];
		$UserName = $_REQUEST['UserName'];

		$Password = $_REQUEST['Password'];
		
		
		$this->model->insertUser($FullName,$Age,$Phone,$UserName,$Password);
	}

	public function edit() {
		$FullName = $_REQUEST['FullName'];
		$UserName = $_REQUEST['UserName'];

		$Password = $_REQUEST['Password'];
		$Age = $_REQUEST['Age'];
		$Phone = $_REQUEST['Phone'];
		$this->model->editUser($FullName,$Password,$Age,$Phone);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
}
?>
