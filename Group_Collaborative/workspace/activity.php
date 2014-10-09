<script src="javascript/activity.js"></script>
<?php
//MODEL PREREQ
include('activity-model.php');
include('sql-model.php');

//VARIABLE PREREQ
$pageType = $_SESSION['activePage'];
$hiddenKey=['activity_id','m_user_id'];
$normalKey=['Time','Activity','Description'];
$normalKeyClass=['act-time-width','act-heading-width','act-description-width'];

//CODE PREREQ ( ANOTHER FILE )
include('activity-header.php');

//--------------------------- VIEW MODE -------------------
?>
<div id="activity-body">
    <div id="dateSearch">
        <form style="display:inline" class="formPrimary" id="formDateSearchRange" method="get">
            <input id="dateSearchRange" type="checkbox" name="searchRange" value='multiple' onChange="dateSearchRangeValidator(this.checked)" <?=($_GET['searchRange'] == 'multiple') ? 'checked' : '' ; ?> ><span style="padding:5px">Range View</span>
            <strong>Date Filter : </strong>
        <?  if(!isset($_SESSION['activityDateIdentifier'])){
				$minDateSearch = (isset($_GET['minDateSearch']))? $_GET['minDateSearch'] : date('d/m/Y') ; 
			}
		    else {
			    $minDateSearch = $_SESSION['activityDateIdentifier'];
		    }
		?>
            <input type="text" id="minDateSearch" name="minDateSearch" value="<?=$minDateSearch?>" class="datefilter" placeholder="<?=date('d/m/Y')?>" />
        <?  $maxDateSearch = (isset($_GET['maxDateSearch']))? $_GET['maxDateSearch'] : date('d/m/Y') ; 
            $maxDateSearchHidden = ($_GET['searchRange'] == 'multiple') ? '' : 'hidden=\'hidden\'' ;
            $maxDateSearchName=($_GET['searchRange'] == 'multiple') ? 'maxDateSearch' : '' ;  ?>
            <strong <?=$maxDateSearchHidden?>> - </strong>
            <input type="text" id="maxDateSearch" name="<?=$maxDateSearchName?>" value="<?=$maxDateSearch?>" class="datefilter" <?=$maxDateSearchHidden?> />
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </form> 
    </div>
<?
if(isset($_GET['maxDateSearch'])){
	$minDateSearchConverted = sqlModel::convertDateTime_ANYtoANY($_GET['minDateSearch'],"d/m/Y","Y-m-d");
	$maxDateSearchConverted = sqlModel::convertDateTime_ANYtoANY($_GET['maxDateSearch'],"d/m/Y","Y-m-d");
	$unixDaysDifference = strtotime($maxDateSearchConverted) - strtotime($minDateSearchConverted);
	$realDaysDifference = floor($unixDaysDifference/(60*60*24));
	$objMinDateSearchConverted = date_create($minDateSearchConverted);
	
	for($i = 0;$i<=$realDaysDifference;$i++){
		$dateActivityPerDay[] = date_format($objMinDateSearchConverted,"d/m/Y");
		date_add($objMinDateSearchConverted,date_interval_create_from_date_string("1 day"));
	}
}
else{
	if(!isset($_GET['minDateSearch'])){
		if(!isset($_SESSION['activityDateIdentifier'])){
			$minDateSearchConverted = sqlModel::convertDateTime_ANYtoANY(date('d/m/Y'),"d/m/Y","Y-m-d");
		}
		else {
			$minDateSearchConverted = sqlModel::convertDateTime_ANYtoANY($_SESSION['activityDateIdentifier'],"d/m/Y","Y-m-d");
			unset($_SESSION['activityDateIdentifier']);
		}
	}
	else {
		$minDateSearchConverted = sqlModel::convertDateTime_ANYtoANY($_GET['minDateSearch'],"d/m/Y","Y-m-d");
	}
	$objMinDateSearchConverted = date_create($minDateSearchConverted);
	$dateActivityPerDay[] = date_format($objMinDateSearchConverted,"d/m/Y");
}

foreach ($dateActivityPerDay as $key => $value){								//Explanation : For every Different Date, Add a fieldset 
?>
    <form action="activity-controller.php" method="post">
        <fieldset class="fieldset-row">
        <legend style="font-size:14px">
        <?  $fieldsetLabel=DateTime::createFromFormat('d/m/Y',$dateActivityPerDay[$key]);
            $fieldsetDay = $fieldsetLabel->format('l'); 
            echo $fieldsetDay." - ".$dateActivityPerDay[$key];?>
        </legend>
        <input type="hidden" name="fieldsetIdentifier" value="<?=$dateActivityPerDay[$key]?>" >
        
        <table>																<? //Start creating TABLES ?>
            <thead>
            <tr>
            <? for($i=0,$iCount = count($normalKey);$i<$iCount;$i++){ ?>
            	<th class="<?=$normalKeyClass[$i]?>"><?=$normalKey[$i]?></th>
            <? } ?>
                <th><button class="newdata" type="button" name="new" value="new" onClick='addNewRow(<?php echo json_encode($JSON_tableStructure,JSON_FORCE_OBJECT)?>,this)'>New</button></th>
                <th><button class="savedata" type="submit" name="save" value="save" onClick='' />Save</button></th>
            </tr>
            </thead>
            <tbody>
    <?	    for($i=0;$i<$resultValueCount;$i++){
                $pointerDate=date('d/m/Y' , strtotime($resultValue[$i]['act_dateTime']));
                if( $pointerDate == $dateActivityPerDay [ $key ] ){
					$keyClassCount = 0;														//to Add Class with auto Array Increment
				?>  <tr>
                
                <?  for( $x=0; $x < $resultKeyCount;$x++){
                        

                        $keyValue=$resultKey[$x]['column_name'];
                        $validateDate=sqlModel::validateDate($resultValue[$i][$keyValue]);
                        
                        if($validateDate == 1 ){
                            
                            $validatedDate = DateTime::createFromFormat('Y-m-d H:i:s',$resultValue[$i][$keyValue]);
                            $validatedDate=$validatedDate->format('H:i:s');
                        
                            $keyStatus=$sqlModel->hiddenKeyValidation($resultKey[$x]['column_name'],$hiddenKey);
    
                            if($keyStatus == 'hidden'){
                            ?>
                            <input type="<?=$keyStatus?>" name="<?=$keyValue.'[]'?>" value="<?=$validatedDate?>" readonly='readonly' autocomplete="off" />
                            <?
                            }
                            else{
                            ?>
                            <td><input class="<?=$normalKeyClass[$keyClassCount]?>" type="<?=$keyStatus?>" name="<?=$keyValue.'[]'?>" value="<?=$validatedDate?>" readonly='readonly' autocomplete="off" /></td>
                            <?
							$keyClassCount += 1;
                            }
                        }
                        else {
                        
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
                    }   ?>
                <td><input type="button" name="edit" value="Edit" onClick="editRow(this.parentNode.parentNode,this)"/></td>
                <td><input type="button" name="delete" value="Delete" onclick='delRow(this.parentNode.parentNode)'/></td>
            </tr>
            <? }
            }?>
            </tbody>
        </table>
        </fieldset>
    </form>
	<? 
}
?> 
<script>
$ ( ".datefilter" ).datepicker({
	dateFormat: "dd/mm/yy",
});

</script>
</div>