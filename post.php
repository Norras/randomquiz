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
<link rel="stylesheet" href="displaystyle.css"></link>
<div class="holder">
<div style="
position: inherit;height: 170px;
width:100%;
background:#094067;
background:#094067;"><a href="./" id="home">Générateur de questions pour tyty</a>';
echo "<a href='https://fr.wikipedia.org/wiki/Special:Random'><img src='./cloud.png' alt='nuage' class='cloud1'></a>";
echo "<a href='https://en.wikipedia.org/wiki/Special:Random'><img src='./cloud.png' alt='nuage' class='cloud2'></a>";
echo displaydown();
echo submitbutton();
echo "</div>";
echo "<div style='position: absolute;
height: 92px;
bottom:0;
left:0;
right:0;
background: #094067;'></div>";
echo askquiz();
// echo "<script type='application/javascript' src='ajaxpost.js'></script>";
// echo "<hr><fieldset>",submitquiz(),"</fieldset></hr>";
// echo "<hr>",deleteall(),"</hr>";
// echo "<script type='application/javascript' src='ajaxdelete.js'></script>";
// echo "</body></html>";

?>