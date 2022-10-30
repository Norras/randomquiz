<?php

// Formulaire d'ajout de questions dans le fichier texte
// (Un peu chiant de faire une BDD pour ça on verra ça plus tard)

function submitquiz($question=''){
    $question=htmlspecialchars($question);
    $arr=htmlspecialchars("Retour");
    $array=scandir("./data");
    $options="";
    array_shift($array);
    array_shift($array);
    foreach($array as $k=>$dir){
        $options.="<optgroup label='".$dir."'>";
        $subarray=scandir("./data/".$dir);
        array_shift($subarray);
        array_shift($subarray);
        foreach($subarray as $i=>$file){
            preg_match("/(.*).txt/",$file,$m);
            $options.="<option value='".$m[1]."'>".$m[1]."</option>\n";
        }
        $options.="<option value='".$dir."addnewchap'>+ Add new chapter</option></optgroup>\n";
    }



    return "<form id='submitquiz' action='' onsubmit='return ajaxpost();' method='post' onchange='selectchap();selectsub();'>
    <div class='submitdiv'>
    <input placeholder=' Saisissez une question..' class='questiontextcase' id='question' name='question' value='$question'/>
    <select class='submitselect' name='deroule'>
    <option value='' disabled selected hidden>Choisir chapitre..</option>"
    .$options.
    "<option value='newfromnew'>+ Add new school subject</option>
    </select>
    <input placeholder='Nommez un chapitre..' name='newchapter' id='newchapter'></input>
    <input placeholder='Nommez une matière..' name='newmatiere' id='newmatiere'></input>
    <div id='returnbutton'>
    <input type='button' id='getback' value=".$arr." onclick='backbutton();'/></div></div>
    <input class='submitformsend' type='submit' value='Soumettre'/>
    </form>";
}



function submitbutton(){
    return "<div class='submitbutton'>
    <a class='submitbuttontext' href='./submitpost.php'>Soumettre une question</a>
    </div>";
}
?>