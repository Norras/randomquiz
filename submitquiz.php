<?php

// Formulaire d'ajout de questions dans le fichier texte
// (Un peu chiant de faire une BDD pour ça on verra ça plus tard)

function submitquiz($question=''){
    $question=htmlspecialchars($question);

    return "<form name='submitquiz' action='' onsubmit='return ajaxpost();' method='post'>
    <div class='submitdiv'>
    <input placeholder='Saisissez une question..' class='questiontextcase' id='question' name='question' value='$question'/>
    <select class='submitselect' name='deroule'>
    <optgroup label='Electromagnétisme'>
    <option value='em1'>Chapitre 1</option>
    <option value='em2'>Chapitre 2</option>
    <option value='em3'>Chapitre 3</option>
    <option value='em4'>Chapitre 4</option></optgroup>
    <optgroup label='Physique Quantique'>
    <option value='pq1'>Chapitre 1</option>
    <option value='pq2'>Chapitre 2</option>
    <option value='pq3'>Chapitre 3</option>
    <option value='pq4'>Chapitre 4</option></optgroup>
    </select></div>
    <input class='submitformsend' type='submit' value='Soumettre'/>
    </form>";
    
}



function submitbutton(){
    return "<div class='submitbutton'>
    <a class='submitbuttontext' href='./submitpost.php'>Soumettre une question</a>
    </div>";
}
?>