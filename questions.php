<?php
include 'read.php';
if (isset($_POST['num']) AND !empty($_POST['num']) AND isset($_POST['deroule']) AND !empty($_POST['deroule'])){
    preg_match('/^(.*)(\d)$/',$_POST['deroule'],$m);
    $m[2]="/chapitre".$m[2].".txt";
    $arr=readtxt("./".$m[1].$m[2]);
    if (is_array($arr)){
        if (count($arr)<$_POST['num']){
            $_POST['num']=count($arr);
        }
        require('fpdf.php');
        $i=10;
        $pdf=new FPDF();
        $pdf->SetFont('Arial','B',$_POST['police']);
        foreach(random($arr,$_POST['num']) as $k=>$v){
            if (($i-10)%3===0){
                $pdf->AddPage();
                $i=10;
            }
            $pdf->Text(10,$i,utf8_decode($v));
            $i=$i+100;

        }
        $pdf->Output();
    } else {
        echo "<h2> Aucune question enregistrée.</h2>\n";
        echo "<form action='post.php'><input type='submit' value='Retour'/></form>";
    }
} else {
    echo "<h2> Erreur, aucun choix selectionné.</h2>\n";
    echo "<form action='post.php'><input type='submit' value='Retour'/></form>";
}


?>