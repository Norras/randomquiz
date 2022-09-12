<?php

// Formulaire de demande de questions aléatoires

function askquiz($num='1'){
    $num=htmlspecialchars($num);

    return "<form action='questions.php' method='post'>
    <div style='position: absolute;
    width: 441px;
    height: 70px;
    left: calc(50% - 441px/2 - 0.5px);
    top: calc(50% - 70px/2 - 91px);'>
    <input id='num' name='num' value='$num' style='position: absolute;left: 0%;right: 85.70%;top: 0%;bottom: 0%;background: #D9D9D9;border-radius: 6px 0px 0px 6px;border-width: 0;'/>
    <select name='deroule' style='
    position: absolute;
    left: 12.93%;
    right: 9.07%;
    top: 0%;
    bottom: 0%;
    background: #ABA4A4;
    border-radius: 0px;
    border-width: 0;'>
    <optgroup label='Electromagnétisme'>
    <option value='em1'>Chapitre 1</option>
    <option value='em2'>Chapitre 2</option>
    <option value='em3'>Chapitre 3</option>
    <option value='em4'>Chapitre 4</option></optgroup>
    <optgroup label='Physique Quantique'>
    <option value='pq1'>Chapitre 1</option>
    <option value='pq2'>Chapitre 2</option>
    <option value='pq3'>Chapitre 3</option>
    <option value='pq4'>Chapitre 4</option></optgroup></select>
    <select name='police' style='position: absolute;
    left: 90.93%;
    right: 0%;
    top: 0%;
    bottom: 0%;
    background: #D9D9D9;
    border-radius: 0px 6px 6px 0px;border-width: 0;'>
    <option value='4'>4</option>
    <option value='8'>8</option>
    <option selected value='12'>12</option>
    <option value='16'>16</option>
    <option value='20'>20</option></select></div>
    <input id='send' type='submit' value='Generer les questions' style='position: absolute;width: 303px;height: 44px;left: calc(50% - 303px/2 - 0.5px);top: calc(50% - 44px/2 + 22px);background: #D9D9D9;border-radius: 6px;border-width: 0;'>
    </form>\n";
}
// TEST
// echo askquiz('10');
?>