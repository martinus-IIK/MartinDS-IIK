<html>
<body>
<h1>W3Schools Internal Note</h1>
<b onMouseOver="testcall(1)">aaaa</b>
<div>
<b>To:</b> <span id="to"></span><br />
<b>From:</b> <span id="from"></span><br />
<b>Message:</b> <span id="message"></span>
</div>

<script>
function testcall(a){
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.open("GET","note.xml",false);
	xmlhttp.send();
	xmlDoc=xmlhttp.responseXML;
	
	document.getElementById("to").innerHTML=
	xmlDoc.getElementsByTagName("to")[0].childNodes[0].nodeValue;
	document.getElementById("from").innerHTML=
	xmlDoc.getElementsByTagName("from")[0].childNodes[0].nodeValue;
	document.getElementById("message").innerHTML=
	xmlDoc.getElementsByTagName("body")[0].childNodes[0].nodeValue;
}
</script>

</body>
</html>