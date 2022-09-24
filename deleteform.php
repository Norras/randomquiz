<?php

function deleteall(){
    return "<form onsubmit='return ajaxdelete();' name='deleteform' method='post'>
    <fieldset>
    <input type='submit' value='TOUT SUPPRIMER'/>
    </fieldset>
    </form>";
}

function deleteselection($arr=array(),$mat,$chap){
    $s="";
    $farrname=$mat.$chap."[]";
    foreach($arr as $k=>$v){
        $s.="<label for='$k'><input type='checkbox' id='$k' name='$farrname' value='$k'>$v</label>\n";
    }

    return "<form class='deleteselection' method='post'>".$s."<input type='submit' value='Supprimer'/></form>";
}


?>