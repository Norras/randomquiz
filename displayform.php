<?php


// function displayquestions(){

//     return "<form id='displayquestions' method='post' action='display.php'>
//     <select name='display' onchange='change();' style='position: absolute;
//     left: 0%;
//     right: 89.79%;
//     top: 74.49%;
//     bottom: 0%;'>
//     <optgroup label='Electromagnétisme'>
//     <option value='em1'>Chapitre 1</option>
//     <option value='em2'>Chapitre 2</option>
//     <option value='em3'>Chapitre 3</option>
//     <option value='em4'>Chapitre 4</option></optgroup>
//     <optgroup label='Physique Quantique'>
//     <option value='pq1'>Chapitre 1</option>
//     <option value='pq2'>Chapitre 2</option>
//     <option value='pq3'>Chapitre 3</option>
//     <option value='pq4'>Chapitre 4</option></optgroup></select></form>";
// }

function displaydown(){

    $array=scandir("./data");
    $options="";
    array_shift($array);
    array_shift($array);
    foreach($array as $k=>$dir){
        $options.="<li><a href onclick='return false;' class='matiere'>".$dir."</a><ul>";
        $subarray=scandir("./data/".$dir);
        array_shift($subarray);
        array_shift($subarray);
        foreach($subarray as $i=>$file){
            preg_match("/(.*).txt/",$file,$m);
            $options.="<li><a href='display.php?matiere=".$dir."&chapitre=".$m[1]."'>".$m[1]."</a></li>\n";
        }
        $options.="</ul></li>\n";
    }

    echo "<ul class='deroule'><li class='button'><a class='buttontext' href onclick='return false;'> Choisir chapitre</a><div class='boxderoule'><ul>"
        .$options.
        "</ul></div></li></ul>";
}