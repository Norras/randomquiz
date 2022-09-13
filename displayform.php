<?php


function displayquestions(){

    return "<form id='displayquestions' method='post' action='display.php'>
    <select name='display' onchange='change();' style='position: absolute;
    left: 0%;
    right: 89.79%;
    top: 74.49%;
    bottom: 0%;'>
    <optgroup label='Electromagnétisme'>
    <option value='em1'>Chapitre 1</option>
    <option value='em2'>Chapitre 2</option>
    <option value='em3'>Chapitre 3</option>
    <option value='em4'>Chapitre 4</option></optgroup>
    <optgroup label='Physique Quantique'>
    <option value='pq1'>Chapitre 1</option>
    <option value='pq2'>Chapitre 2</option>
    <option value='pq3'>Chapitre 3</option>
    <option value='pq4'>Chapitre 4</option></optgroup></select></form>";
}