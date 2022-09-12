<?php

include 'read.php';

if (isset($_POST['display']) AND !empty($_POST['display'])){
    preg_match('/^(.*)(\d)$/',$_POST['display'],$m);
    $m[2]="/chapitre".$m[2].".txt";
    $arr=readtxt("./".$m[1].$m[2]);
    if (is_array($arr)){
        foreach($arr as $k=>$v){
            echo "<h3>$v\n</h3>";
        }
    } else {
        echo "<h2>Aucune question enregistrée.</h2>";
        echo "<form action='post.php'><input type='submit' value='Retour'/></form>";
    }
}

?>