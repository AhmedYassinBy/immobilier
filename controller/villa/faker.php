<?php
require_once "../model/config.php";
$connexion = new config();
$pdo = $connexion->getConnexion();
$sql = "delete from immobiliere";
$pdo->exec($sql);
$sql = "";
for ($i = 1; $i < 100; $i++) {
    $ref =  $i + 1;
    $prop = "ahmed yassin";
    $loc = "Tunis";
    $surface = random_int(2, 500);
    $domusage = "domicile";
    $nbrpiece = random_int(2, 50);
    $nbrEtage = random_int(2, 500);
    $sql .= "insert into immobiliere values ('$ref','$prop','$loc',$surface, $nbrpiece,'$domusage','Appartement',$nbrEtage,null); ";
}
$pdo->exec($sql);
