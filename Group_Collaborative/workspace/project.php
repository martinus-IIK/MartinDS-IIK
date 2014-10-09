<?php
//MODEL PREREQ


//VARIABLE PREREQ
$pageType = $_SESSION['activePage'];
//var_dump($_SESSION);

if(isset($_POST['pViewLevel'])){
	$_SESSION['pViewLevel'] = $_POST['pViewLevel'];	
}

?>
<div id="project-body">
<fieldset>
	<legend></legend>
    <form method="post">
    	<input type="hidden" name="pViewLevel" value="master" >
        <button type="submit" name="pMode" value="view">View Project</button>
        <button type="submit" name="pMode" value="new">New Project</button>
    </form>
</fieldset>

<?

if(!isset($_POST['pMode'])){
	$_SESSION['pMode'] = 'view';
}
else { 
	$_SESSION['pMode'] = $_POST['pMode'];
}

if( $_SESSION['pMode'] == 'view' ){
	if(!isset($_SESSION['pViewLevel'])) $_SESSION['pViewLevel'] = 'master';
	
	
	if($_SESSION['pViewLevel'] == 'master'){
		include ('project-m.php');
	}
	elseif($_SESSION['pViewLevel'] == 'config'){
		include ('project-m-form.php');
	}
	elseif($_SESSION['pViewLevel'] == 'complete'){
		include ('project-m.php');
	}
	else {
		include ('project-d.php');		
	}
}
else {
	include ('project-m-form.php');	
}

?>
</div>




