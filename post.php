<?php

include 'debut_html.php';
include 'askquiz.php';
include 'submitquiz.php';
include 'deleteform.php';
include 'displayform.php';

echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');

echo '<body>
<script type="application/javascript" src="change.js"></script>


<div style="position: absolute;
height: 170px;
left: 0px;
right: 0px;
top: 0px;
background:beige;"><h2 style=text-align:center;>Générateur de questions pour tyty</h2>';
echo displayquestions(),"</div>";
echo "";
echo askquiz();
// echo "<script type='application/javascript' src='ajaxpost.js'></script>";
// echo "<hr><fieldset>",,"</fieldset></hr>";
// echo "<hr>",deleteall(),"</hr>";
// echo "<script type='application/javascript' src='ajaxdelete.js'></script>";
// echo "</body></html>";

?>