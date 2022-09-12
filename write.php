<?php
if (isset($_POST['question']) AND !empty($_POST['question'])){
    preg_match('/^(.*)(\d)$/',$_POST['deroule'],$m);
    if (!is_dir($m[1])){
        mkdir("./".$m[1]."/",0700,true);
    }
    $file=fopen("./".$m[1]."/chapitre".$m[2].".txt","a+");
    fputs($file,$_POST['question']."\n");
    echo "La question a bien été soumise !";
    fclose($file);

} else {
    echo "Aucune question n'a été soumise.";
}

?>