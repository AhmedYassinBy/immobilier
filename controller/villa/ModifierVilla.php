<?php
require_once "../../model/CRUDVilla.php";
require_once "../../model/villa.php";



if (isset($_GET['reference'])) {
    $crud = new CRUDVilla();
    $refe = $_GET['reference'];
    $rec = $crud->RecupererVilla($refe);
    include "../../view/villa/ModifierVilla.php";
} else {
    if (isset($_POST["aj"])) {
        $crud = new CRUDVilla();
        $ref = htmlspecialchars($_POST['ref']);
        $prop = htmlspecialchars($_POST['prop']);
        $loc = htmlspecialchars($_POST['loc']);
        $sur = htmlspecialchars($_POST['sur']);
        $domusage = htmlspecialchars($_POST['domus']);
        $nbrPiece = htmlspecialchars($_POST['pie']);
        $nbrEtage = htmlspecialchars($_POST['nbret']);

        $villa = new villa($ref, $prop, $loc, $sur, $nbrPiece, $domusage, $nbrEtage);
        $res = $crud->ModifierVilla($villa);
        if ($res) {

            echo header("location: ../../view/villa/apresinserer.php");
            exit;
        } else {
            echo 'probleme dinsertion';
        }
    }
}
