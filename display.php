<?php

include 'read.php';
include 'debut_html.php';
include 'displayform.php';
include 'submitquiz.php';
include 'deleteform.php';



// if (isset($_POST['display']) AND !empty($_POST['display'])){
//     preg_match('/^(.*)(\d)$/',$_POST['display'],$m);
//     $m[2]="/chapitre".$m[2].".txt";
//     $arr=readtxt("./".$m[1].$m[2]);
//     if (is_array($arr)){
//         foreach($arr as $k=>$v){
//             echo "<h3>$v\n</h3>";
//         }
//     } else {
//         echo "<h2>Aucune question enregistrée.</h2>";
//         echo "<form action='post.php'><input type='submit' value='Retour'/></form>";
//     }
// }
echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');

echo '<body>
<link rel="stylesheet" href="dropdown.css"></link>
<link rel="stylesheet" href="submitcase.css"></link>
<link rel="stylesheet" href="displaystyle.css"></link>
<script type="application/javascript" src="change.js"></script>
<script type="application/javascript" src="ajaxpost.js"></script>
<script type="application/javascript" src="checkboxdisplay.js"></script>
<div class="holder">
<div style="
position: inherit;height: 170px;
width:100%;
background:#094067;
background:#094067;"><a href="./post.php" id="home">Générateur de questions pour tyty</a>';
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
background: #094067;'></div>

<input type='button' id='selectonoff' value='Sélectionner' onclick='showcheckbox(this);'/>
<input type='button' id='selectall' value='Tout sélectionner' onclick='selectall(this);' />
<div class='questionsdisplay'>
";


if (isset($_GET['chapitre']) AND isset($_GET['matiere']) AND !empty($_GET['chapitre']) AND !empty($_GET['matiere'])){
    $m="./data/".$_GET['matiere']."/".$_GET['chapitre'].".txt";
    $arr=readtxt($m);
    if (is_array($arr)){
        echo deleteselection($arr,$_GET['matiere'],$_GET['chapitre']);
    } else {
        echo "<h2>Aucune question enregistrée.</h2><style>#selectonoff{display:none;}</style>";
    }
}
echo "</div></div>";

?>