<!doctype html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta charset="utf-8">
<meta content="" name="description">
<meta content="Martinus D. Setiono" name="author"
<meta http-equiv="content-type" content="text/html">
<title>IIK-IL Login Page</title>
<link href="css/base.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<script type="text/javascript">
//document.write ('<p>Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
}
</script>

    <div class="wrapper">
    	<div class="header">
            <div class="header-img-wrap">
            <img id="img_header1" src="images/web/iik_logo_web1.jpg" alt="iik_logo"><img id="img_header2" src="images/web/iik_logo_web2.jpg" alt="iik_logo">
            </div>
        </div>
    </div>
    <div class="status-bar">
        <p>Silahkan <span style="font-weight:bold">login</span></p>
        Pastikan untuk selalu <span style="font-weight:800">logout</span> setelah anda selesai.
    </div>
    
    <div class="main">

        
        <div class="login">
          <h1>Login to IIK - Interactive Learning</h1>
          <form action="login-validation.php">
            <p><input type="text" name="user_id" placeholder="User ID" /></p>
            <p><input type="password" name="password" placeholder="Password" /></p>
            <input type="submit" value="Log in" />
          </form>
        </div>
    </div>
    
	<div class="footer">
    	<div class="footer-container">
        	<p>Version 1.0 Alpha.</p>
            <span id="date-time">Date & Time</span>
        </div>
    </div>
</body>
</html>
