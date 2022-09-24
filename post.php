<?php

include 'debut_html.php';
include 'askquiz.php';
include 'submitquiz.php';
include 'deleteform.php';
include 'displayform.php';

echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');

echo '<body>
<link rel="stylesheet" href="dropdown.css"></link>
<script type="application/javascript" src="change.js"></script>


<div style="position: absolute;
height: 170px;
left: 0px;
right: 0px;
top: 0px;
background:#094067;"><a href id="home">Générateur de questions pour tyty</a>';
echo displaydown();
echo submitbutton();
echo "<img src='./cloud.png' alt='nuage' class='cloud1'>";
echo "<img src='./cloud.png' alt='nuage' class='cloud2'>";
echo "</div>";
echo "<div style='position: absolute;
height: 92px;
left: 0px;
right: 0px;
top: calc(50% - 92px/2 + 466px);
background: #094067;'></div>";
echo askquiz();
// echo "<script type='application/javascript' src='ajaxpost.js'></script>";
// echo "<hr><fieldset>",submitquiz(),"</fieldset></hr>";
// echo "<hr>",deleteall(),"</hr>";
// echo "<script type='application/javascript' src='ajaxdelete.js'></script>";
// echo "</body></html>";

?>