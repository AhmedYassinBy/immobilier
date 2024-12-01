

<?php
require_once '../../model/CRUDVilla.php';
if (isset($_POST["aj"])) {
    $crud = new CRUDVilla;
    $ref = htmlspecialchars($_POST['ref']);
    $prop = htmlspecialchars($_POST['prop']);
    $loc = htmlspecialchars($_POST['loc']);
    $sur = htmlspecialchars($_POST['sur']);
    $domusage = htmlspecialchars($_POST['domus']);
    $nbrPiece = htmlspecialchars($_POST['pie']);
    $nbeEtage = htmlspecialchars($_POST['nbret']);

    $villa = new villa($ref, $prop, $loc, $sur, $nbrPiece, $domusage, $nbeEtage);
    $res = $crud->AjouterApp($villa);
    if ($res) {

        echo header("location: ../../view/villa/apresinserer.php");
    } else {
        echo 'probleme dinsertion';
    }
} else {
    include '../view/add.php';
}
