<?php
session_start();
//Prerequisites
require('../connect.php');

//MODEL PREREQ
include('activity-model.php');
include('sql-model.php');
include('general-model.php');

//VARIABLE PREREQ
	//Page & User Controller
	$pageType = $_SESSION['activePage'];
	$userRolesLevel = $_SESSION['userRolesLevel'];
	$user_id = $_SESSION['user_id'];
	
	//Specific Data Variable
	$tableMaster = 'tb_m_activity';
	$keyIdentifier = 'act_dateTime';
	$valueIdentifier = $_POST['fieldsetIdentifier'];		// In this case, DATE
	$minValueIdentifier = sqlModel::convertDateTime_ANYtoANY($valueIdentifier." 00:00:00",'d/m/Y H:i:s','Y-m-d H:i:s');
	$maxValueIdentifier = sqlModel::convertDateTime_ANYtoANY($valueIdentifier." 23:59:59",'d/m/Y H:i:s','Y-m-d H:i:s');
	
	$dateSqlFormat = sqlModel::convertDateTime_ANYtoANY($valueIdentifier,'d/m/Y','Y-m-d');					//Date SQL Format to be added to dateTime
	$arrPostActivityIdentifier = $valueIdentifier;
	for($i = 0; $i < count($_POST[$keyIdentifier]); $i++){
		$arrPostActivityData[$i]['activity_id'] = ($_POST['activity_id'][$i] !== null) ? $_POST['activity_id'][$i] : null;
		$arrPostActivityData[$i]['m_user_id'] = ($_POST['m_user_id'][$i] !== null ) ? $_POST['m_user_id'][$i] : null;
		$arrPostActivityData[$i]['act_dateTime'] = ($_POST['act_dateTime'][$i] !== null ) ? $dateSqlFormat." ".$_POST['act_dateTime'][$i] : null;	//*
		$arrPostActivityData[$i]['act_heading'] = ($_POST['act_heading'][$i] !== null ) ? $_POST['act_heading'][$i] : null;
		$arrPostActivityData[$i]['act_description'] = ($_POST['act_description'][$i] !== null ) ? $_POST['act_description'][$i] : null;
	} 
	
	var_dump($_SESSION);
	var_dump($valueIdentifier);


//ACTIVITY SQL PRELOAD


$sql="  SELECT * from ".$tableMaster." 
        WHERE m_user_id='".$user_id."' 
		    and ".$keyIdentifier." >= '".$minValueIdentifier."'
            and ".$keyIdentifier." <= '".$maxValueIdentifier."'";

$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
$db->close;
	
unset($result);
while ($result[]=$sqlResult->fetch_assoc());
$resultActivity=$result;	//Get Specific Key from SQL to Corresponding to a 

//var_dump($resultActivity);																				//HOLD BASE INFORMATION DB
//var_dump($arrPostActivityData);																			//HOLD POST INFORMATION DB


// COMPARE PROCEDURE
unset($arrExistingId);
unset($arrExistingPostId);
unset($arrToBeDeletedId);
unset($arrToBeDeletedIdSQL);
unset($arrUpdateId);
unset($arrUpdateIdSQL);
unset($arrNewIdSQL);
$tmpCount = 0;


for ($i = 0, $iCount = count($resultActivity)-1;$i < $iCount; $i++ ){		
	$arrExistingId[] = $resultActivity[$i]['activity_id'];												//ACCUMULATES ALL EXISTING BASE SQL ID
}
for ($i = 0, $iCount = count($arrPostActivityData);$i < $iCount; $i++ ){								//Check FOR POST DATA
	
	if($arrPostActivityData[$i]['activity_id'] === null){												//IF ACTIVITY NULL THEN ADD NEW
		$arrNewIdSQL[] = "INSERT INTO tb_m_activity ( m_user_id, act_dateTime, act_heading, act_description ) VALUES ( '".$user_id."','".$arrPostActivityData[$i]['act_dateTime']."','".$arrPostActivityData[$i]['act_heading']."','".$arrPostActivityData[$i]['act_description']."');";			
	}
	else {
		$arrExistingPostId[] = $arrPostActivityData[$i]['activity_id'];										//ACCUMULATES ALL EXISTING POST ID
	}
}

//var_dump($arrExistingId);
//var_dump($arrExistingPostId);


$resultCount = count($resultActivity)-1;		
while ($tmpCount < $resultCount ){																		// WHILE NOT COMPLETELY LOOP IN SQL RESULT COUNT 
	//DELETE PROCEDURE
	if($arrExistingPostId === null ) $arrExistingPostId = array ('-1');
	$RemoveIdStatus = in_array($arrExistingId[$tmpCount],$arrExistingPostId);							// CHECK CURRENT SQL ID LOCATION IN POST ID
	if($RemoveIdStatus == FALSE){	
		$arrToBeDeletedId[]=$arrExistingId[$tmpCount];													// AND IF THE ID CANNOT BE FOUND
		$arrToBeDeletedIdSQL[]="DELETE from tb_m_activity WHERE activity_id='".$arrExistingId[$tmpCount]."'";
	}
																			
	for ($x = 0, $xCount = count($arrPostActivityData); $x < $xCount; $x ++ ){							// LOOP EACH $POST ELEMENT
		if($arrPostActivityData[$x]['activity_id'] !== null ){											// CHECK ID , IF ID NOT NULL
		
			for($i = 0; $i < $resultCount; $i++ ){														// COMPARE WITH SQL RESULT
				if($arrPostActivityData[$x]['activity_id'] === $resultActivity[$i]['activity_id']){		// CHECK SAME ACTIVITY ID, IF SAME
					$arrUpdateId['activity_id'][$x] = $arrPostActivityData[$x]['activity_id'];			// ADD TO ArrExistId
					
					$arrUpdateIdSQL[$x] = "UPDATE tb_m_activity SET act_dateTime = '".$arrPostActivityData[$x]['act_dateTime']."', act_heading = '".$arrPostActivityData[$x]['act_heading']."', act_description = '".$arrPostActivityData[$x]['act_description']."' WHERE activity_id = '".$arrPostActivityData[$x]['activity_id']."'";
				}
			}
		}
		else {																							//IF POST ACTIVITY DATA IS NOT NULL
					
			
		}
	}
	
	$tmpCount = $tmpCount + 1;
}

var_dump($arrUpdateIdSQL);
var_dump($arrNewIdSQL);
var_dump($arrToBeDeletedIdSQL);

//SQL Array ReArrange & SQL Run Consequences


if(count($arrUpdateIdSQL) != 0){
	foreach ($arrUpdateIdSQL as $value) {	
		
		$sql = $value;
		$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
		if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
	}
}
$db->close;

if(count($arrNewIdSQL) != 0){	
	foreach ($arrNewIdSQL as $value) {
		$sql = $value;
		echo $sql;
		$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
		if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
	}
}
$db->close;

if(count($arrToBeDeletedIdSQL) != 0){
	foreach ($arrToBeDeletedIdSQL as $value) {
		$sql = $value;
		$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
		if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
	}
	$db->close;
}

if(isset($_SESSION['activePage'])){
	$defaultView = $_SESSION['activePage'];
	$_SESSION['activityDateIdentifier'] = $valueIdentifier;	
	header("Location: http://".$_SERVER["SERVER_NAME"]."/Group_Collaborative/workspace/");
}


exit();

?>