<?php


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
    return "<form action='deleteallfiles.php' class='deleteselection' method='post'>".$s."<input id='deletebutton' type='submit' value='Supprimer'/>
    </form>";
}


?>