<?php

include 'ressources.php';


echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');
echo '<body><link rel="stylesheet" href="dropdown.css"></link>
<link rel="stylesheet" href="displaystyle.css"></link>';
echo page();
echo askquiz();
// echo "<script type='application/javascript' src='ajaxpost.js'></script>";
// echo "<hr><fieldset>",submitquiz(),"</fieldset></hr>";
// echo "<hr>",deleteall(),"</hr>";
// echo "<script type='application/javascript' src='ajaxdelete.js'></script>";
// echo "</body></html>";

?>