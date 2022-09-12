<?php


function displayquestions(){

    return "<form name='displayquestions' method='post' action='display.php'>
    <label for='display'>Afficher chapitre</label>
    <select name='display'>
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
    <input type='submit' value='Afficher'/></form>";
}