<?php


include 'ressources.php';


echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');
echo page();
echo '<link rel="stylesheet" href="displaystyle.css"></link>
<link rel="stylesheet" href="dropdown.css"></link>
<link rel="stylesheet" href="submitcase.css"></link>';

echo displaytiles();




?>