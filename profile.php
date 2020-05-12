<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "User.php");
require_once(__ROOT__ . "controller/UsersController.php");
require_once(__ROOT__ . "ViewUser.php");

$model = new User($_SESSION["ID"]);
$controller = new UsersController($model);
$view = new ViewUser($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){
		case 'edit':
			echo $view->editForm();
			break;
		case 'editaction':
			$controller->edit();
			echo $view->output();
			break;
		case 'reservation':
			header("Location:Reservation.php");
			break;
		case 'delete':
			$controller->delete();
			echo $view->output();
		case 'signOut':
			session_destroy();
			header("Location:index.php");
			break;
	}
}
else
	echo $view->output();

?>