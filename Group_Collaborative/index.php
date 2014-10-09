<?
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="Martinus D. Setiono" name="author">
<meta http-equiv="content-type" content="text/html">
<title>IIK-Collaborative Login Page</title>
<link rel="stylesheet" href="css/base.css" type="text/css">
<link rel="stylesheet" href="css/index.css"  type="text/css">

</head>
<body>
<script type="text/javascript">
//if (document.getElementById) onload = function () {
//	setInterval ("document.getElementById ('header-date-time').firstChild.data = new Date().toLocaleString()", 50)
//}
</script>
    <header id="main-header">
        <div id="header-top-image">
<img src="images/iik_logo.jpg" alt="iik_logo">  
        </div>
        <div id="header-content">
            <span id="header-date-time">Date & Time</span>
        </div>		    

   </header>

	<!--main-->
    <main id="content">
    	<div class="login">
          <h1>Login to IIK - Collaborative Tool</h1>
<? if(isset($_SESSION['errLoginMessage'])){ echo '<span id="errMessage">'.$_SESSION['errLoginMessage'].'</span>'; session_unset();} ?>
          <form action="login-validation.php" method="post">
            <p><input type="text" name="userName" placeholder="User ID" autocomplete="off" /></p>
            <p><input type="password" name="userPassword" placeholder="Password" /></p>
            <input type="submit" value="Log in" />
          </form>
        </div>
    
    
    
    
    </main>

	<footer id="main-footer">
    </footer>
<?
session_unset();
?>
</body>
</html>