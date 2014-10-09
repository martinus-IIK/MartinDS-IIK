<script>
function projectAddMember(){
	var arrOptionDatalist = [];
	var arrOptionDatalistId = [];
	var inputDatalist = document.getElementById('projectUserList');
	var optionDatalist = document.getElementById('projectDatalist');
	var parentSelect = document.getElementById('projectSelUserList');
	
	for(i = 0; i < optionDatalist.options.length; i ++){				//Populate Arraylist and ArrayID from Object 'optionDatalist'		
		arrOptionDatalist.push(optionDatalist.options[i].value);
		arrOptionDatalistId.push(optionDatalist.options[i].id);
	}
	
	if(inputDatalist.value !== '' ){									//if Username is not empty, then start transfer Procedure.
		
		var toTargetUsername = inputDatalist.value;
		var usernameIndex = arrOptionDatalist.indexOf(toTargetUsername);
		
		
		
		var optionObj = document.createElement('option');				//Start to create new OPTION to transfer data
		optionObj.text=toTargetUsername;
		parentSelect.add(optionObj);
	
	}
	
	
}


</script>


<?
if(!isset($_SESSION['project_id'])){
	exit();
}

var_dump($_SESSION);

$sql = "SELECT * from tb_m_user WHERE user_id <> '".$user_id."'";

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
<form>
<table>
    <tr>
        <td>Project Name</td>
        <td><input type="text" name="pro_name" value="" ></td>
    </tr>
    <tr>
        <td>Project Description</td>
        <td><input type="text" name="pro_description" value="" ></td>
    </tr>
    <tr>
        <td>Project Start Date</td>
        <td><input type="text" name="pro_startDate" value="" ></td>
    </tr>
    <tr>
        <td>Project End Date</td>
        <td><input type="text" name="pro_endDate" value="" ></td>
    </tr>
    <tr>
    	<td>Memberlist</td>
        <td><input id="projectUserList" list="projectDatalist" placeholder="Choose one">
            <datalist id="projectDatalist">
        <?  
		for($i=0;$i<$resultValueCount;$i++){
		?>
                <option id="user-<?=$resultValue[$i]['user_id']?>"><?=$resultValue[$i]['userNickname']?></option>
        <?		
		}
		?>
            </datalist>
            <button type="button" onClick="projectAddMember()" formnovalidate>Add >></button>

        </td>
        <td><button type="button">Rmv <<</button><span style="">Member :</span>
            <select id="projectSelUserList" style="vertical-align:middle; width:200px;" size="2">
            </select>
        </td>
    </tr>
    <tr>
        <td>
        <button type="reset">Reset</button>
        <button type="submit" name="submit" value="submit">Create Project</button>
        </td>
    </tr>
</table>
</button>