// JavaScript Document

//Tutorial Variable Declaration
var w0_tutLength=wInstruksiText.length;

var Word_currentPoint=null;
var Word_currentSubpoint=null;

function tutorialControl(tmpWord_newPoint,tmpWord_newSubpoint){

	//Tutorial Setting Declaration
	if ( tmpWord_newPoint == null ) {
		tmpWord_newPoint = 0;
		tmpWord_newSubpoint = 0;
	}
	
	//Variable Comparison to determine that the current session must jump into next session
	if(tmpWord_newSubpoint > 0){
		if(tmpWord_newSubpoint >= wInstruksiText[Word_currentPoint].length ) {

		tmpWord_newPoint += 1;
		tmpWord_newSubpoint = 0;
		}
	}

		if(tmpWord_newPoint >= w0_tutLength){
			window.location.assign("index.php");
			exit();
		}


	//Tutorial View Control
	//Bila Berubah dikarenakan column, maka rumus di bawah akan mengubah paksa material
	if(Word_currentPoint != tmpWord_newPoint){
		

		
		
		//Reset All Tutorial Step, Unload Pictures and Button, Sets new Point to SELECT element  -> Start anew
		var myNode = document.getElementById("main-tutorialimage-box");
		while (myNode.firstChild) {
			myNode.removeChild(myNode.firstChild);
		}
		
		//Apply Text untuk Instruksi Text bila tutorial masih berlanjut
		document.getElementById('instruction-text').innerHTML=
		wInstruksiText[tmpWord_newPoint][tmpWord_newSubpoint][0];
		
	} 
	else {
		
		
		if(wInstruksiText[tmpWord_newPoint][tmpWord_newSubpoint][1] == "continue"){	//Bila mode=continue
		
	document.getElementById('instruction-text').innerHTML=document.getElementById('instruction-text').innerHTML.concat(wInstruksiText[tmpWord_newPoint][tmpWord_newSubpoint][0]); //Sifat Text akan berupa increment
	
		}
		else { //Bila bukan mode continue, maka sifat text adalah statement baru pada 'instruksi'
	document.getElementById('instruction-text').innerHTML=wInstruksiText[tmpWord_newPoint][tmpWord_newSubpoint][0]; 
		}
	}
	
	
	//Menyimpan variable untuk mengetahui perubahan Point Utama Tutorial
	Word_currentPoint = tmpWord_newPoint;	
	Word_currentSubpoint = tmpWord_newSubpoint;
	
	//Menulis variable ke dalam html page
	document.getElementById('coursesProgress1').value=tmpWord_newPoint;
	document.getElementById('coursesProgress2').value=tmpWord_newSubpoint;
	document.getElementById('learn-select-material').selectedIndex = tmpWord_newPoint;
	
	
		
	//Tutorial Movement Logic & Validation	
	var tmpInputAttributeProgress = "tutorialControl(" + tmpWord_newPoint + "," + (Word_currentSubpoint+1) + ")";



	//Tutorial Element Control - Removal & Add New  ( Button & Image )
	//img Declaration
	var DOM_img=document.createElement("img");
	var DOM_img_add=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][0] != null) ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][0] : "none";
	DOM_img.src=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][1] != null) ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][1] : "";
	DOM_img.style.position=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][2] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][2] : "";
	DOM_img.style.minWidth=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][3] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][3] : "";
	DOM_img.style.maxWidth=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][4] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][4] : "";
	DOM_img.style.top=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][5] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][5] : "";
	DOM_img.style.right=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][6] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][6] : "";
	DOM_img.style.bottom=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][7] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][7] : "";
	DOM_img.style.left=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][8] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][8] : "";
	DOM_img.style.zIndex=(wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][9] != "") ? wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][9] : "";
	DOM_img.setAttribute('lifeDuration',wInstruksiImage[tmpWord_newPoint][tmpWord_newSubpoint][10]);
	//Append Image
	if (DOM_img_add != "none") document.getElementById('main-tutorialimage-box').appendChild(DOM_img);

	
	//tutButton Declaration
	var DOM_tutButton=document.createElement('input');
	DOM_tutButton.setAttribute('type','button');
	DOM_tutButton.setAttribute('onClick',tmpInputAttributeProgress);
	DOM_tutButton.setAttribute('id','learnButton');
	DOM_tutButton.style.position=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][0] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][0] : "";
	DOM_tutButton.style.border=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][1] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][1] : "";
	DOM_tutButton.style.background=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][2] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][2] : "";
	DOM_tutButton.style.width=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][3] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][3] : "";
	DOM_tutButton.style.height=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][4] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][4] : "";
	DOM_tutButton.style.top=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][5] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][5] : "";
	DOM_tutButton.style.right=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][6] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][6] : "";
	DOM_tutButton.style.bottom=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][7] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][7] : "";
	DOM_tutButton.style.left=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][8] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][8] : "";
	DOM_tutButton.style.zIndex=(wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][9] != "") ? wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][9] : "";
	DOM_tutButton.setAttribute('lifeDuration',wInstruksiButton[tmpWord_newPoint][tmpWord_newSubpoint][10]);
	DOM_tutButton.setAttribute('onMouseOver',"buttonMouseOver();");
	DOM_tutButton.setAttribute('onMouseLeave',"buttonMouseLeave();");
	//Append tutButton
	document.getElementById('main-tutorialimage-box').appendChild(DOM_tutButton);

	//Clean Expired Tutorial Button
	var tmpParent = document.getElementById('main-tutorialimage-box');
	var tmpChildNode = tmpParent.childNodes;
	var tmpToBeRemoved= [];
	for (i=0;i<tmpChildNode.length;i++){
		if(tmpChildNode[i].hasAttribute('lifeDuration')){
			var tmpAttrib = tmpChildNode[i].getAttribute('lifeDuration');
			//alert(tmpAttrib);
			if (tmpAttrib<1) {
				tmpToBeRemoved.push(i);
				//tmpParent.removeChild(tmpChildNode[i]);
			}
		}
	}
	//Removal
	for(i=tmpToBeRemoved.length;i>0;i--){
		tmpParent.removeChild(tmpChildNode[tmpToBeRemoved[i-1]]);	
	}

	//Deduct remaining Tutorial lifeDuration
	var tmpParent = document.getElementById('main-tutorialimage-box');
	var tmpChildNode = tmpParent.childNodes;
	for (i=0;i<tmpChildNode.length;i++){
		if(tmpChildNode[i].hasAttribute('lifeDuration')){
			var tmpAttrib = tmpChildNode[i].getAttribute('lifeDuration');
			if (tmpAttrib>0) {
				tmpChildNode[i].setAttribute('lifeDuration',tmpAttrib-1);
			}
		}
	}
	
	document.getElementById('learn-select-material').scrollIntoView();
}

function buttonMouseOver(){
	var i = document.getElementById('learnButton');
	i.style.transition='all 2s';
	i.style.borderColor='rgba(255,0,0,0.00)';
}

function buttonMouseLeave(){
	var i = document.getElementById('learnButton');
	i.style.transition='all 2s';
	i.style.borderColor='red';
}