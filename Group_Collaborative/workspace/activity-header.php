<?php

//---------------------- SQL READ --------------------
$sqlModel = new sqlModel;

$sql="SELECT column_name from information_schema.columns where table_name = "."'tb_m_activity'"." order by ordinal_position";

$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
$db->close;

unset($result);
while ($result[]=$sqlResult->fetch_assoc());
$resultKey=$result;	//Get Key ( Column Name ) from Corresponding table
$resultKeyCount=count($result)-1;

$sqlResult->free();


$sql="SELECT * from tb_m_activity WHERE m_user_id = '".$user_id."' ORDER BY act_dateTime ASC";
$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
//if ($num_rows == 0){ //	die('Error! Couldn\'t Enumerate Activity !'); }
$db->close();

unset($result);		
while ($result[]=$sqlResult->fetch_assoc());					//Fetch SQL into $result array

$resultValueCount=count($result)-1;
$resultValue=$result;
$sqlResult->free();

$dateTimeRange	=$sqlModel->getValueDataArray($resultValue,'act_dateTime');	

$activityModel = new activityModel;
//JSON - TABLE STRUCTURE ARRAY
for($i=0;$i<$resultKeyCount;$i++){
	$JSON_tableStructure[$i]['column'] = $resultKey[$i]['column_name'];
	$JSON_tableStructure[$i]['visibility'] = $sqlModel->hiddenKeyValidation($resultKey[$i]['column_name'],$hiddenKey);
	$JSON_tableStructure[$i]['class']= $activityModel->activityKeyClassifier($resultKey[$i]['column_name'],$resultKey);
}
?>