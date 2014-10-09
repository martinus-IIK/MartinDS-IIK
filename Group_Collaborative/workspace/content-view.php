<?
//PREPROCESSING ALL VARIABLES



$loadPage = $_SESSION['activePage'];
switch ($loadPage) {
	case "activities":
		include("activity.php");
	break;
	case "project":
		include("project.php");
	break;
	case "team":
		include("team.php");
	break;
	case "management":
		include("management.php");
	break;
	case "db admin":
		echo $objMenu[3]['group_description'];
		include("dbadmin-view.php");
	break;
default:

}

?>