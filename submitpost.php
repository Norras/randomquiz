<?php


include 'debut_html.php';
include 'submitquiz.php';
include 'displayform.php';


echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');

echo '<body>
<link rel="stylesheet" href="dropdown.css"></link>
<link rel="stylesheet" href="submitcase.css"></link>
<script type="application/javascript" src="change.js"></script>
<script type="application/javascript" src="ajaxpost.js"></script>
<script type="application/javascript" src="select.js"></script>
<div style="position: absolute;
height: 170px;
left: 0px;
right: 0px;
top: 0px;
background:#094067;"><a href="./post.php" id="home">Générateur de questions pour tyty</a>';
echo "<img src='./cloud.png' alt='nuage' class='cloud1'>";
echo "<img src='./cloud.png' alt='nuage' class='cloud2'>";
echo displaydown();
echo submitbutton();
echo "</div>";
echo "<div style='position: absolute;
height: 92px;
left: 0px;
right: 0px;
top: calc(50% - 92px/2 + 466px);

background: #094067;'></div>";
echo submitquiz();

?>