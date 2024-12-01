<?php
require_once "../model/CRUDAppartement.php";
require_once "../model/immobilier.php";



if (isset($_GET['reference'])) {
    $crud = new CRUDAppartement();
    $refe = $_GET['reference'];
    $rec = $crud->RecupererApp($refe);
    include "../view/ModifierAppartement.php";
} else {
    if (isset($_POST["aj"])) {
        $crud = new CRUDAppartement;
        $ref = htmlspecialchars($_POST['ref']);
        $prop = htmlspecialchars($_POST['prop']);
        $loc = htmlspecialchars($_POST['loc']);
        $sur = htmlspecialchars($_POST['sur']);
        $domusage = htmlspecialchars($_POST['domus']);
        $nbrPiece = htmlspecialchars($_POST['pie']);
        $surEspCom = htmlspecialchars($_POST['suresp']);

        $immobilier = new immobilier($ref, $prop, $loc, $sur, $nbrPiece, $domusage, $surEspCom);
        $res = $crud->ModifierApp($immobilier);
        if ($res) {

            echo header("location: ../view/apresinser.php");
            exit;
        } else {
            echo 'probleme dinsertion';
        }
    }
}
