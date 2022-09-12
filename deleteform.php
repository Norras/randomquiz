<?php

function deleteall(){
    return "<form onsubmit='return ajaxdelete();' name='deleteform' method='post'>
    <fieldset>
    <input type='submit' value='TOUT SUPPRIMER'/>
    </fieldset>
    </form>";
}


?>