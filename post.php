<?php

include 'debut_html.php';
include 'askquiz.php';
include 'submitquiz.php';
include 'deleteform.php';
include 'displayform.php';

echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');

echo '<body><h2 style=text-align:center;>Générateur de questions pour tyty</h2>';
echo askquiz();
// echo "<h2 style='text-align=center;'>Soumettre une question</h2>";
// echo "<fieldset>",submitquiz(),"</fieldset>";
// echo "<script type='application/javascript' src='ajaxpost.js'></script>";
// echo "<hr><fieldset>",displayquestions(),"</fieldset></hr>";
// echo "<hr>",deleteall(),"</hr>";
// echo "<script type='application/javascript' src='ajaxdelete.js'></script>";
// echo "</body></html>";

?>