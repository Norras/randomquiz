<?php


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

//var_dump(random(readtxt('./pq/chapitre1.txt'),2));
?>