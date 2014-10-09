// JavaScript Document
var dateNameIdentifier = 'act_dateTime[]';

function countInObject(obj) {		//Count Elements in multidimentional array
	var count = 0;
	// iterate over properties, increment if a non-prototype property
	for(var key in obj) if(obj.hasOwnProperty(key)) count++;
	return count;
}

function addNewRow(rowAll,tableElement){
	var parentTableList = tableElement.parentNode.parentNode.parentNode.parentNode;
	var parentTableCount = parentTableList.childNodes.length;
	for ( i = 0; i < parentTableCount; i++){
		var strI_name = parentTableList.childNodes[i].nodeName;
		if(	strI_name == 'TBODY' ){
			tBody = parentTableList.childNodes[i];						// Variable to hold Main Element name
			var newCellAmount=countInObject(rowAll);					// To count required Cell for new cell
			var newRow = tBody.insertRow(tBody.rows.length);			// Insert a row in the table at the last row
			
			for(x = 0; x < newCellAmount; x ++){

				var newElement  = document.createElement('input')		// Append a text node to the cell
				newElement.setAttribute('name',rowAll[x].column + '[]');
				newElement.setAttribute('type',rowAll[x].visibility);
				newElement.setAttribute('class',rowAll[x].class);
				newElement.setAttribute('autocomplete','off');

				if ( rowAll[x].visibility != 'hidden' ){
					var newCell  = newRow.insertCell(-1);				// Insert a cell in the row at index -1
					newCell.appendChild(newElement);					// Creating ELEMENT !
									
					if ( rowAll[x].column + '[]' == dateNameIdentifier ){	
						$( newElement ).timepicker({				// Add TimePicker if necessary with Formatting
							timeFormat: "HH:mm:ss",
						});						
					}
				}
			}
			var newCell  = newRow.insertCell(-1);						// Insert a cell in the row at index -1
			var newElement = document.createElement('input')
			newElement.setAttribute('type','button');
			newElement.setAttribute('name','delete');
			newElement.setAttribute('value','Delete');
			newElement.setAttribute('onclick','delRow(this.parentNode.parentNode)');
			newCell.appendChild(newElement);
		}
	}
}



function delRow(thisRow){
	var parentTable = thisRow.parentNode.parentNode;
	parentTable.deleteRow(thisRow.rowIndex);
}
function editRow(thisRow,thisButton){												//editRow -> Enables Edit for Children when clicked, or disables
	var strButtonValue = thisButton.getAttribute('value');
	if(strButtonValue === 'Edit') {
		var arrGrandchildrenContent = [];
		thisButton.setAttribute('value','Simpan');
		var children = thisRow.childNodes;
		for (i = 0; i < children.length; i ++ ){
			if(children[i].nodeName == 'TD' ){
				var grandchildren = children[i].childNodes;
				if( grandchildren[0].hasAttribute('type') === true ){
					var grandchildrenType = grandchildren[0].getAttribute('type');
					var grandchildrenName = grandchildren[0].getAttribute('name'); 
					if(grandchildrenType != 'button'){		
						if(grandchildrenName == dateNameIdentifier){
							grandchildren[0].setAttribute('class','datetime');
							$(grandchildren[0]).timepicker({	//Add TimePicker
								timeFormat: "HH:mm:ss",
							});					
						}
						grandchildren[0].removeAttribute('readonly');
					}
				}
			}
		}
	}
	else if( strButtonValue === 'Simpan'){
		thisButton.setAttribute('value','Edit');
		var children = thisRow.childNodes;
		for (i = 0; i < children.length; i ++ ){
			if(children[i].nodeName == 'TD' ){
				var grandchildren = children[i].childNodes;
				if( grandchildren[0].hasAttribute('type') === true ){
					var grandchildrenName = grandchildren[0].getAttribute('name');	
					var grandchildrenType = grandchildren[0].getAttribute('type');
					if(grandchildrenType != 'button'){	
						if(grandchildrenName == dateNameIdentifier){
							$(grandchildren[0]).timepicker("destroy");				//Destroy DateTimePicker
						}
						grandchildren[0].setAttribute('readonly','readonly');
					}
				}
			}
		}
	}
}

function dateSearchRangeValidator(chkboxState){
	var a = document.getElementById('maxDateSearch');
	var b = a.previousSibling.previousSibling;
	if( chkboxState == true ){
		a.removeAttribute('hidden')
		a.setAttribute('name','maxDateSearch');
		b.removeAttribute('hidden')	


	}
	else{
		a.setAttribute('hidden','hidden');
		a.removeAttribute('name')
		b.setAttribute('hidden','hidden');
	}
}