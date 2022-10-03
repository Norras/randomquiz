<?php
if (isset($_POST['question']) AND !empty($_POST['question']) AND !empty($_POST['deroule'])){

    if (!empty($_POST['newchapter']) AND preg_match('/(.*)(addnewchap)/',$_POST['deroule'],$m)){
        $m[2]=$_POST['newchapter'];
    } else if (!empty($_POST['newchapter']) AND !empty($_POST['newmatiere']) AND $_POST['deroule']==='newfromnew'){
        $m[0]="";
        $m[1]=$_POST['newmatiere'];
        $m[2]=$_POST['newchapter'];
    } else {
        preg_match('/^(.*)(\d)$/',$_POST['deroule'],$m);
    }
    if (!is_dir($m[1])){
        mkdir("./data/".$m[1]."/",0700,true);
    }
    $file=fopen("./data/".$m[1]."/".$m[2].".txt","a+");
    fputs($file,$_POST['question']."\n");
    echo "La question a bien été soumise !";
    fclose($file);

} else {
    echo "Aucune question n'a été soumise.";
}

?>
