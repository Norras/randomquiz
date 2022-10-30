<?php



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