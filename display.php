<?php


include 'ressources.php';



echo debut_html('Générateur de questions pour tyty');
header('Content-type: text/html; charset=utf-8');
echo page();

echo "<input type='button' id='selectonoff' value='Sélectionner' onclick='showcheckbox(this);'/>
<input type='button' id='selectall' value='Tout sélectionner' onclick='selectall(this);' />
<link rel='stylesheet' href='dropdown.css'></link>
<link rel='stylesheet' href='submitcase.css'></link>
<link rel='stylesheet' href='displaystyle.css'></link>
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
echo "</div></div></body></html>";

?>