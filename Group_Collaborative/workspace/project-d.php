<script src="javascript/project.js"></script>
<?
//var_dump($_SESSION);
include('project-model.php');
include('sql-model.php');

$hiddenKey=['d_project_id','m_project_id','m_user_id','d_pro_completed'];
$normalKey=['Task Heading','Start Date','End Date'];
$normalKeyClass=['heading','datetime','datetime'];

$sqlModel = new sqlModel;
//=======================================================================================
$sql="SELECT column_name from information_schema.columns where table_name = "."'tb_d_project'"." order by ordinal_position";
$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
$db->close;

unset($result);
while ($result[]=$sqlResult->fetch_assoc());
$sqlResult->free();								//Free Memory of $sqlResult
$resultKey=$result;								//Get Key ( Column Name ) from Corresponding table
$resultKeyCount=count($result)-1;

//=======================================================================================
$sql="SELECT * from tb_d_project WHERE m_project_id = '".$_SESSION['project_id']."'";
	
$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
$db->close;

unset($result);
while ($result[]=$sqlResult->fetch_assoc());
$sqlResult->free();								//Free Memory of $sqlResult
$resultValue=$result;							//Get Value from Corresponding table
$resultValueCount=count($result)-1;

//var_dump($result);

$projectModel = new projectModel;

//JSON - TABLE STRUCTURE ARRAY
for($i=0;$i<$resultKeyCount;$i++){
	$JSON_tableStructure[$i]['column'] = $resultKey[$i]['column_name'];
	$JSON_tableStructure[$i]['visibility'] = $sqlModel->hiddenKeyValidation($resultKey[$i]['column_name'],$hiddenKey);
	$JSON_tableStructure[$i]['class']= $projectModel->projectKeyClassifier($resultKey[$i]['column_name'],$resultKey);
}

?>
<table border="1">
    <tr>
        <tr>
        <? for($i=0,$iCount = count($normalKey);$i<$iCount;$i++){ ?>
            <th class="<?=$normalKeyClass[$i]?>"><?=$normalKey[$i]?></th>
        <? } ?>
            <th><button class="newdata" type="button" name="new" value="new" onClick='addNewRow(<?php echo json_encode($JSON_tableStructure,JSON_FORCE_OBJECT)?>,this)'>New</button></th>
            <th><button class="savedata" type="submit" name="save" value="save" onClick='' />Save</button></th>
        </tr>
    </tr>
<?
for($i=0;$i<$resultValueCount;$i++){
	$keyClassCount = 0;
?>
    <tr>
<?
	for($x=0; $x < $resultKeyCount;$x ++){
                        
		$keyStatus=$sqlModel->hiddenKeyValidation($resultKey[$x]['column_name'],$hiddenKey);
		$keyValue=$resultKey[$x]['column_name'];

		if($keyStatus == 'hidden'){
		?>
		<input type="<?=$keyStatus?>" name="<?=$keyValue.'[]'?>" value="<?=$resultValue[$i][$keyValue]?>" readonly='readonly' autocomplete="off" />
		<?
		}
		else{
		?>
		<td><input class="<?=$normalKeyClass[$keyClassCount]?>" type="<?=$keyStatus?>" name="<?=$keyValue.'[]'?>" value="<?=$resultValue[$i][$keyValue]?>" readonly='readonly' autocomplete="off"/></td>
		<?	
		$keyClassCount += 1;
		}
	}
?>
        <td><input type="button" name="edit" value="Edit" onClick="editRow(this.parentNode.parentNode,this)"/></td>
        <td><input type="button" name="delete" value="Delete" onclick='delRow(this.parentNode.parentNode)'/></td>
    </tr>
<?
}
?>