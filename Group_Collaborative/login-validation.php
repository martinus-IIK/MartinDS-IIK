<?
session_start();
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//Init
$homeURL="http://".$_SERVER['SERVER_ADDR']."/Group_Collaborative/";
$targetURL="http://".$_SERVER['SERVER_ADDR']."/Group_Collaborative/workspace/";

//Prerequisites
require('connect.php');

//Function Declaration
function userRolesLevel( $dbroles_id ){
	global $dbserver,$dbuser,$dbpassword,$dbschema;
	
	$sql='	
	SELECT * 
	FROM tb_m_dbroles 
	WHERE dbroles_id = '."'$dbroles_id'";

	$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema);
	if($db->connect_errno > 0 ){
		die('Unable to connect to database ['.$db->connect_errno.']');
	}

	if(!$result = $db->query( $sql )){
		die('There was an error running the query [' . $db->error . ']');
	}
	$db->close();
	
	$num_rows=$result->num_rows;
	if (($num_rows == 0) || ($num_rows > 1)){
		$_SESSION['errMessage']='WARNING, could not initialize RolesDB. Roles defaulted to level <strong>1</strong>';
		return('1');	
	}
	
	while($row = $result->fetch_assoc()){
		return($row['dbr_level']);
		
		}
}




?>
<pre>
<? //Begin - Login Execution

//Creating new MySQLI connection
$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema);
if($db->connect_errno > 0 ){
	die('Unable to connect to database ['.$db->connect_errno.']');
}

//Sanitize Login
$userName = $db->real_escape_string($_POST['userName']);
$userPassword = $db->real_escape_string($_POST['userPassword']);

//Query
$sql=<<<SQL
	SELECT * 
	FROM tb_m_user
	WHERE 
		userName = '$userName' AND
		userPassword = 
SQL;

$sql = "SELECT * from tb_m_user WHERE userName = '".$userName."' AND userPassword = '".md5($userPassword)."'";

if(!$result = $db->query($sql)){
	die('There was an error running the query [' . $db->error . ']');
}
$db->close();

$num_rows=$result->num_rows;
if ($num_rows == 0){
	$_SESSION['errLoginMessage']="<script type='text/javascript'>
		onload =function(){alert('Username atau password salah!! Ulangi kembali');}
			</script>";
			
//$_SESSION['errLoginMessage']='Incorrect Login Detail !';
	header('location:'.$homeURL);


}

//Pass this variable to next page
while($row = $result->fetch_assoc()){
	header('location:'.$targetURL);
	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['userName']=$row['userName'];
	$_SESSION['userNickname']=$row['userNickname'];
	$_SESSION['userRolesLevel']=userRolesLevel($row['m_dbroles_id']);
}



?>
</pre>