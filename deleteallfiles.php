<?php

// // SUPPRIMER TOUS LES DOSSIERS DE STOCKAGE
// $array=["em","pq"];

// foreach($array as $mat){ // Parcourt tous les dossiers possibles
//     $files= glob($mat.'/*');
//     foreach($files as $file){ // Parcourt tous les fichiers dans le dossier
//         if (is_file($file)){
//             unlink($file);
//         }
//     }
//     if (is_dir($mat)){
//         rmdir($mat);
//     }
    
// }

// echo "Tout a bien été supprimé.\n";
session_start();

if (isset($_POST['deletequestions'])){
    $all=$_SESSION['data'];
    $deleteq=$_POST['deletequestions'];
    foreach($deleteq as $k=>$v){
        unset($all[$v]);
    }
    
    $m="./data/".$_SESSION['matiere']."/".$_SESSION['chapitre'].".txt";
    $file=fopen($m,"w");
    foreach($all as $k=>$v){
        fwrite($file,$v);
    }
    fclose($file);
    unset($_SESSION);
    
    if (filesize($m)===0){
        unlink($m);
    }
    echo "Les fichiers ont été supprimé.\n";
} else {
    echo "Il n'y a eu aucune sélection.\n";
}

?>