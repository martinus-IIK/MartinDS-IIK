<?php
session_start();
date_default_timezone_set('Asia/Jakarta');

//Model Read
include ('nav-model.php');
include ('general-model.php');
include ('content-model.php');

if(!isset($_SESSION['user_id'])){
?>
    <div id="error-nosession">
    <p>Authentication Failed - Please <a href="../index.php">Relogin</a></p>
    </div>
<?
	exit("404 Error Not Found");
} 

//Prerequisites
require('../connect.php');

//Init+
$userRolesLevel = $_SESSION['userRolesLevel'];
$user_id = $_SESSION['user_id'];
$page_urlVariable="p=";

//SET DEFAULT PAGE IF EMPTY
$navModel = new navModel;
$generalModel = new generalModel;
$contentModel = new contentModel;

//SESSION untuk mengubah page loading

//--

if(!isset($_SESSION['activePage'])){
	$defaultView = 'activity';	
	$currentUrl = $generalModel->curPageURL();
	$addonUrl .= "?".$page_urlVariable.$defaultView;
 	$_SESSION['activePage'] = $defaultView;
	header("Location:".$currentUrl.$addonUrl);
} else {
	if(isset($_GET['p'])) $_SESSION['activePage'] = $_GET['p'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="content-type" content="text/html">
<title>BW-CT Workspace</title>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="jquery/jquery-ui.css">
<link rel="stylesheet" href="jquery/jquery-ui-timepicker-addon.css">
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script src="jquery/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript">
//if (document.getElementById) onload = function () {
//	setInterval ("document.getElementById ('header-date-time').firstChild.data = new Date().toLocaleString()", 50)
//}

</script>


</head>
<body>
<div id="container">
    <header id="main-header">
        <div id="header-top-image">
        <!--<img src="../images/iik_logo.jpg" alt="iik_logo">-->
            <div id="logos">
              <a id="cube" href="#">
                <img src="../images/iik_logo.png"  id="front" alt="iik_logo1">
                <img src="../images/iik_since.png" id="back" alt="iik_logo2">              
              </a>
            </div>      
        </div>
        <div id="header-content">
        	<span id="header-welcome">Welcome <strong><?=$_SESSION['userNickname']?></strong> - <strong><a href="../index.php">Log out</a></strong></span>
            <span id="header-date-time">Date & Time</span>
        </div> 
   </header>

    <div id="main-body">

            <div id="main-navbar-left">
					<div id="m-n-l-wrapper">
						<h4>Collaborative Menu</h4>
					</div>
                    <hr />
                <nav>
                <ul>
                <?
				$arrMenu = $navModel->getNavList();
				
				//GET AVAILABLE NAVIGATION FOR CURRENT USER
					for($i=0,$x=count($arrMenu);$i<$x;$i++){
				?>
					<li><a href="<?="?".$page_urlVariable.$arrMenu[$i]['menu_parameter'] ?>" <?=$navModel->getNavActive($_SESSION['activePage'],$arrMenu[$i]['gro_name']);?> ><?=$arrMenu[$i]['menu_heading'] ?></a></li>
				<? 
					if($_SESSION['activePage'] == $arrMenu[$i]['gro_name']){
						$conDescription=$arrMenu[$i]['gro_description'];	
					}
				
				} ?>
                </ul>
                </nav>
            </div>
            <div id="main-content">
                <div id="main-content-description">
                   	<h4><?=$conDescription ?></h4> 
                </div>
                <hr />
                <div id="main-content-content"><br>
				    <?
				    include($contentModel->changePage($_SESSION['activePage']));
				    ?>
            	</div>

				
            </div>

    </div>
</div>
</body>
</html>