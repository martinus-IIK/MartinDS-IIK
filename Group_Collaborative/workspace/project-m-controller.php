<?php
session_start();

var_dump($_SESSION);
var_dump($_POST);

switch($_POST['mode']){
case 'viewdetail':

		$_SESSION['pViewLevel'] = 'detail';
		$_SESSION['project_id'] = $_POST['project_id'];
	
	break;
case 'config':

		$_SESSION['pViewLevel'] = 'config';
		$_SESSION['project_id'] = $_POST['project_id'];
	break;
case 'complete':

		$_SESSION['pViewLevel'] = 'complete';
		$_SESSION['project_id'] = $_POST['project_id'];
	break;
default:


}

header("Location: http://".$_SERVER["SERVER_NAME"]."/Group_Collaborative/workspace/");
?>