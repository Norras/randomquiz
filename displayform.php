<?php


// function displayquestions(){

//     return "<form id='displayquestions' method='post' action='display.php'>
//     <select name='display' onchange='change();' style='position: absolute;
//     left: 0%;
//     right: 89.79%;
//     top: 74.49%;
//     bottom: 0%;'>
//     <optgroup label='Electromagnétisme'>
//     <option value='em1'>Chapitre 1</option>
//     <option value='em2'>Chapitre 2</option>
//     <option value='em3'>Chapitre 3</option>
//     <option value='em4'>Chapitre 4</option></optgroup>
//     <optgroup label='Physique Quantique'>
//     <option value='pq1'>Chapitre 1</option>
//     <option value='pq2'>Chapitre 2</option>
//     <option value='pq3'>Chapitre 3</option>
//     <option value='pq4'>Chapitre 4</option></optgroup></select></form>";
// }

function displaydown(){

    echo "<ul class='deroule'><li class='button'><a class='buttontext' href onclick='return false;'> Choisir chapitre</a><div class='boxderoule'><ul>
            <li><a href onclick='return false;' class='matiere'>Électromagnétique</a><ul>
                <li><a href='display.php?matiere=em&chapitre=1'>Chapitre 1</a></li>
                <li><a href>Chapitre 2</a></li>
                <li><a href>Chapitre 3</a></li>
                <li><a href>Chapitre 4</a></li></ul></li>
            <li><a href onclick='return false;' class='matiere'>Physique Quantique</a><ul>
                <li><a href>Chapitre 1</a></li>
                <li><a href>Chapitre 2</a></li>
                <li><a href>Chapitre 3</a></li>
                <li><a href>Chapitre 4</a></li></ul></li>
            </ul></div></li></ul>";
}