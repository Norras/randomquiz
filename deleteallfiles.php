<?php

// SUPPRIMER TOUS LES DOSSIERS DE STOCKAGE
$array=["em","pq"];

foreach($array as $mat){ // Parcourt tous les dossiers possibles
    $files= glob($mat.'/*');
    foreach($files as $file){ // Parcourt tous les fichiers dans le dossier
        if (is_file($file)){
            unlink($file);
        }
    }
    if (is_dir($mat)){
        rmdir($mat);
    }
    
}

echo "Tout a bien été supprimé.\n";

?>