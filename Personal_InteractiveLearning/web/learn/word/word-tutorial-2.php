<!doctype html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta charset="utf-8">
<meta content="" name="description">
<meta content="Martinus D. Setiono" name="author">
<meta http-equiv="content-type" content="text/html">
<title>IIK-IL Word Learning</title>
<link href="../../../css/base.css" rel="stylesheet" type="text/css">
<link href="css/word-tutorial.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/word-2-datatext.js"></script>
<script type="text/javascript" src="script/word-2-dataimage.js"></script>
<script type="text/javascript" src="script/word-2-databutton.js"></script>
<script type="text/javascript" src="script/word-2-explanation.js"></script>

</head>
<body onLoad="tutorialControl();">
    <div class="wrapper">
    	<div class="header">
            <div class="header-img-wrap">
            <img id="img_header1" src="../../../images/web/iik_logo_web1.jpg" alt="iik logo1"><img id="img_header2" src="../../../images/web/iik_logo_web2.jpg" alt="iik logo2">    
            </div>
        </div>
    </div>
    
    <div class="status-bar">
        <p>User :<span style="font-weight:bold">[User_ID]</span>. Status : Active</p>
        <p>Anda berada di : <span style="font-weight:bold">Word Tutorial 1 - Membuat Dokumen</span></p>
    </div>
    
    <div class="main">
    	<table class="learn" id="learn-table">
            	<tr class="learn-progress-row">
                    <td class="learn-progress-column-left">
                        <label>Materi yang aktif :
                            <select id="learn-select-material" onChange='tutorialControl(this.value,0)';>
                              <option value="0" selected="SELECTED">1. Pengaturan Format Paragraf </option>
                              <option value="1">2. Mengatur Identasi Paragraf</option>
                              <option value="2">3. Mengatur Jarak Antar Baris</option>
                              <option value="3">4. Pengaturan Format Tabulasi</option>
                              <option value="4">5. Pengaturan Bullet and Numbering</option>
                              <option value="5">6. Pemberian Bingkai Halaman</option>
                            </select>
                        </label>
                    </td>
                    <td class="learn-progress-column-right">
                    	<input id="coursesProgress1" type="text" value="--"/>
                        <strong>/</strong>
                        <input id="coursesProgress2" type="text" value="--"/>

                    </td>
                </tr>
                <tr>
                    <td class="learn-instruction-column" colspan="2">
                    	<p id="instruction-text"></p>
                    </td>
                </tr>
        </table>
            
        <div class="main-tutorialimage">
            <div id="main-tutorialimage-box"></div>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer-container">
            <p id="test">Version 1.0 Alpha.</p>        
        </div>
    </div>
</body>
</html>