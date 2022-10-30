<?php

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
    <div style='position: absolute;
    width: 441px;
    height: 70px;
    left: calc(50% - 441px/2 - 0.5px);
    top: 386px;
    bottom:568px;
    right:500px;'>
    <input id='num' name='num' value='$num' style='position: absolute;left: 0%;right: 85.70%;top: 0%;bottom: 0%;background: #215376;border-radius: 6px 0px 0px 6px;border-width: 0;font-family:CM;font-size:100%;color:white;'/>
    <select name='deroule' style='
    position: absolute;
    left: 57px;
    right: 40px;
    top: 0px;
    bottom: 0px;
    background: #094067;
    border-radius: 0px;
    border-width: 0;
    font-family:CM;
    font-size:100%;
    color: white;
    '>".$options."</select>
    <select name='police' style='position: absolute;
    left: 90.93%;
    right: 0%;
    top: 0%;
    bottom: 0%;
    background: #215376;
    border-radius: 0px 6px 6px 0px;border-width: 0;
    font-family:CM;
    font-size:100%;
    color:white;'>
    <option value='4'>4</option>
    <option value='8'>8</option>
    <option selected value='12'>12</option>
    <option value='16'>16</option>
    <option value='20'>20</option></select></div>
    <input id='send' type='submit' value='Générer les questions' style='position: absolute;width: 303px;height: 44px;left: calc(50% - 303px/2 - 0.5px);top: 512px;bottom:468px;background: #ef4565;border-radius: 6px;border-width: 0;color: #fffffe;'>
    </form>\n";
}
// TEST
// echo askquiz('10');
?>