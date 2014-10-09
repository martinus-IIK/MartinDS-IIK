<?php
include('project-model.php');
include('sql-model.php');

$sqlModel = new sqlModel;


//Variable Prereq
$hiddenKey=['project_id','pro_creator','m_user_id','m_team_id'];

//====================================
$sql="SELECT column_name from information_schema.columns where table_name = "."'tb_m_project'"." order by ordinal_position";
$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
$db->close;

unset($result);
while ($result[]=$sqlResult->fetch_assoc());
$sqlResult->free();								//Free Memory of $sqlResult
$resultKey=$result;								//Get Key ( Column Name ) from Corresponding table
$resultKeyCount=count($result)-1;

//===================================
$sql="SELECT 
    b.user_id as user_id,
	b.m_team_id as team_id,
	b.m_project_id as project_id,
	a.m_user_id as leader_id,
	a.pro_name as pro_name,
	a.pro_description as pro_description,
	a.pro_startDate as pro_startDate,
	a.pro_endDate as pro_endDate,
	a.pro_creator as pro_creator,
	a.pro_completed as pro_completed
from
    tb_m_project as a
	LEFT JOIN 
	(	SELECT 
            c.d_team_id,
			c.m_user_id as user_id,
			c.m_team_id,
			d.m_project_id,
			d.team_startDate
        FROM
            tb_d_team as c
                LEFT join
            tb_m_team as d ON c.m_team_id = d.team_id
        WHERE
            c.m_user_id = '".$user_id."') as b
	ON
	a.m_team_id = b.m_team_id
	WHERE
	b.user_id = '".$user_id."'";
	
$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
if(!$sqlResult = $db->query( $sql )){ die('There was an error running the query [' . $db->error . ']'); }
$num_rows=$sqlResult->num_rows;
$db->close;

unset($result);
while ($result[]=$sqlResult->fetch_assoc());
$sqlResult->free();								//Free Memory of $sqlResult
$resultValue=$result;							//Get Value from Corresponding table
$resultValueCount=count($result)-1;

//var_dump($resultValue);

?>
<div>
<fieldset>
	<legend>Active Supervised Project</legend>
<table border="1">
    <tr>
        <th>Project Name</th>
        <th>Description</th>
        <th>Due Date / Time</th>
        <th>Day Left</th>
        <th>View</th>
        <th>Conf</th>
        <th>Compl</th>
    </tr>
    <tr>
<?  
unset($arrProjectUnmanaged);							//Variable Array to hold Project which are unmanaged
for ($i=0,$iCount = $resultValueCount;$i<$iCount;$i++){
	if($resultValue[$i]['leader_id'] == $user_id){
?>
	<form method="post" action="project-m-controller.php">
	<tr>
    	<input type="hidden" name="project_id" value="<?=$resultValue[$i]['project_id']?>" >
        
        <td><label><?=$resultValue[$i]['pro_name']?></label></td>
        <td><label><?=$resultValue[$i]['pro_description']?></label></td>
        <td><label><?=sqlModel::convertDateTime_ANYtoANY($resultValue[$i]['pro_endDate'],'Y-m-d H:i:s','d/m/Y H:i:s')?></label></td>
        <td><label><? $unixDaysDifference = strtotime($sqlModel::convertDateTime_ANYtoANY($resultValue[$i]['pro_endDate'],'Y-m-d H:i:s',"Y-m-d")) - strtotime($sqlModel::convertDateTime_ANYtoANY(date('Y-m-d H:i:s'),'Y-m-d H:i:s',"Y-m-d")); $realDaysDifference = floor($unixDaysDifference/(60*60*24)); echo $realDaysDifference;?> </label></td>
		<td><button type="submit" name="mode" value="viewdetail">View</button></td>
        <td><button type="submit" name="mode" value="config">Config</button></td>
        <td><button type="submit" name="mode" value="complete">Complete</button></td>

    </tr>
    </form>
<?
	}
	else {
		$arrProjectUnmanaged[] = $resultValue[$i];
	}
}
?>
	</tr>
</table>
</fieldset>
</div>


<div>
<fieldset>
	<legend>Active Membership Project</legend>
<table border="1">
    <tr>
        <th>Project Name</th>
        <th>Description</th>
        <th>Due Date / Time</th>
        <th>Day Left</th>
        <th></th>
    </tr>
    <tr>
<?
for ($i=0,$iCount = count($arrProjectUnmanaged);$i<$iCount;$i++){
?>
	<form method="post" action="project-m-controller.php">
	
    <tr>
    	<input type="hidden" name="project_id" value="<?=$arrProjectUnmanaged[$i]['project_id']?>" >

        <td><label><?=$arrProjectUnmanaged[$i]['pro_name']?></label></td>
        <td><label><?=$arrProjectUnmanaged[$i]['pro_description']?></label></td>
        <td><label><?=sqlModel::convertDateTime_ANYtoANY($arrProjectUnmanaged[$i]['pro_endDate'],'Y-m-d H:i:s','d/m/Y H:i:s')?></label></td>
        <td><label><? $unixDaysDifference = strtotime($sqlModel::convertDateTime_ANYtoANY($arrProjectUnmanaged[$i]['pro_endDate'],'Y-m-d H:i:s',"Y-m-d")) - strtotime($sqlModel::convertDateTime_ANYtoANY(date('Y-m-d H:i:s'),'Y-m-d H:i:s',"Y-m-d")); $realDaysDifference = floor($unixDaysDifference/(60*60*24)); echo $realDaysDifference;?> </label></td>
		<td><button type="submit" name="mode" value="viewdetail">View</button></td>
    </tr>
    </form>
<?
}
?>
	</tr>
</table>
</fieldset>
</div>

