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
            $options.="<li><a href='display?matiere=".$dir."&chapitre=".$m[1]."'>".$m[1]."</a></li>\n";
        }
        $options.="</ul></li>\n";
    }

    return "<ul class='deroule'><li class='button'><a class='buttontext' href onclick='return false;'> Choisir chapitre</a><div class='boxderoule'><ul>"
        .$options.
        "</ul></div></li></ul>";
}

function displaybutton(){
    return "<div class='deroule'><a class='buttontext' href='subjects'>Chapitres</a></div>";
}

function submitbutton(){
    return "<div class='submitbutton'>
    <a class='submitbuttontext' href='./submit'>Soumettre</a>
    </div>";
}


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
        <div id='submitinfos'>
            <input placeholder=' Saisissez une question..' class='questiontextcase' id='question' name='question' value='$question'/>
            <select class='submitselect' name='deroule'>
            <option value='' disabled selected hidden>Choisir chapitre..</option>"
            .$options.
            "<option value='newfromnew'>+ Add new school subject</option>
            </select>
        </div>
        <div id='newsubchap'>
            <button type='button' id='activatechap'><span>Add a Chapter..</span></button>
            <input placeholder='Nommez un chapitre..' name='newchapter' id='newchapter'></input>
            <input placeholder='Nommez une matière..' name='newmatiere' id='newmatiere'></input>
            <button type='button' id='activatesub'><span>Add a Subject..</span></button>
        </div>
        <div id='divsendbutton'>
            <input class='submitformsend' type='submit' value='Soumettre'/>
        </div>
    </div>
    </form>";
}

function readtxt($filename){
    if (is_file($filename)){
        $file=file($filename);
        return $file;
    }
    return -1;

}

function random($array=array(),$num=1){
    if ($array===-1){
        return -1;
    }
    $resk=array_rand($array,$num);
    $res=array();
    if (is_int($resk)){
        $res[]=$array[$resk];
    } else {
        foreach($resk as $k=>$v){
            $res[]=$array[$v];
        }
    }
    return $res;
}

function deleteselection($arr=array(),$mat,$chap){
    $s="";
    $farrname="deletequestions[]";
    foreach($arr as $k=>$v){
        $s.="<label for='$k'><input type='checkbox' id='$k' name='$farrname' value='$k'>$v</label>\n";
    }
    session_start();
    $_SESSION['data']=$arr;
    $_SESSION['matiere']=$mat;
    $_SESSION['chapitre']=$chap;
    return "<form id='deleteform' action='' onsubmit='return ajaxdelete();' method='post'>".$s."<input id='deletebutton' type='submit' value='Supprimer'/>
    </form>";
}


function debut_html($title) {
    return
      "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML Basic 1.1//EN'
          'http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd'>\n" .
      "<html xmlns='http://www.w3.org/1999/xhtml' lang='fr' style='background: #f5fbff;'>\n" .
      "<head>\n" .
      "<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />\n" .
      "<title>" . 
      $title .
      "</title>\n" .
      "</head>\n";
}

// Formulaire de demande de questions aléatoires

function askquiz($num='1'){
    $num=htmlspecialchars($num);
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
            $options.="<option value='".$dir."/".$m[1]."'>".$m[1]."</option>\n";
        }
    }

    return "<form action='questions.php' method='post'>
    <div style='display: flex;
                padding: 1rem;
                bottom: 0;
                right: 0;
                top: 0;
                left: 0;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                grid-gap: 2rem;
                background: #90b4ce1f;
                border-radius: 100px;
                width: 1082px;
                height: 300px;
                margin: auto;
                position: absolute;
    '>
    <div style='display: flex;
                width: 100%;
                justify-content: center;
                align-items: center;
                grid-gap: 20px;
                width: 100%;
    '>
    <input id='num' name='num' value='$num' style='display:flex;
                                                    background: #215376;
                                                    border-radius: 100px;
                                                    border-width: 0;
                                                    font-family:CM;
                                                    font-size:100%;
                                                    color:white;
                                                    padding: .5rem;
                                                    text-align: center;
                                                    width: 2rem;
    '/>
    <select name='deroule' style='display: flex;
                                background: #094067;
                                border-radius: 100px;
                                border-width: 0;
                                font-family:CM;
                                font-size:100%;
                                color: white;
                                padding: .5rem;
                                width: 300px;

    '>".$options."</select>
    <select name='police' style='display: flex;
                                left: 90.93%;
                                right: 0%;
                                top: 0%;
                                bottom: 0%;
                                background: #215376;
                                border-radius: 100px;
                                border-width: 0;
                                font-family:CM;
                                font-size:100%;
                                color:white;
                                padding: .5rem;
                                width: 4rem;

    '>
        <option value='4'>4</option>
        <option value='8'>8</option>
        <option selected value='12'>12</option>
        <option value='16'>16</option>
        <option value='20'>20</option>
    </select></div>
    <div style='width: 100%;
                display: flex;
                align-content: center;
                justify-content: center;
                align-items: center;
    '>
    <input id='send' type='submit' value='Générer les questions' style='background: #ef4565;
                                                                        border-radius: 20px;
                                                                        border-width: 0;
                                                                        color: #fffffe;
                                                                        padding: .8rem;'>
    </div>
</div>
    
    </form>\n";
}
function page(){
    return '<div class="holder">
    <div style="position: inherit;
                height: 170px;
                width:100%;
                background:#094067;
                background:#094067;">
    <a href="./" id="home">Générateur de questions pour tyty</a>
    <script type="application/javascript" src="ressources.js"></script>
    <a href="https://fr.wikipedia.org/wiki/Special:Random" target="_blank"><img src="./cloud.png" alt="nuage" class="cloud1"></a>
    <a href="https://en.wikipedia.org/wiki/Special:Random" target="_blank"><img src="./cloud.png" alt="nuage" class="cloud2"></a>'.displaybutton().submitbutton().
    '</div>
    <div style="position: absolute;
                height: 92px;
                bottom:0;
                left:0;
                right:0;
                background: #094067;">
    </div>';
}



// create divs with rows of tiles 
function displaytiles(){
    $array=scandir("./data");
    array_shift($array);
    array_shift($array);
    $s="<div class='grid'>";
    $i=0;
    foreach($array as $k=>$dir){
        $s.="<h2>".$dir."</h2>";
        $subarray=scandir("./data/".$dir);
        array_shift($subarray);
        array_shift($subarray);
        $s.="<div class='row'>";
        foreach($subarray as $i=>$file){
            preg_match("/(.*).txt/",$file,$m);
            $s.="<div class='tile' style='background-image: url(\"./data/".$dir."/".$m[1].".jpg\");'>
            <a href='display?matiere=".$dir."&chapitre=".$m[1]."'>".$m[1]."</a>
            </div>";
        }
        $s.="</div>";
    }
    $s.="</div>";
    return $s;
}




?>
