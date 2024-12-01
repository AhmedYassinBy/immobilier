

<?php
require_once '../model/CRUDAppartement.php';
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
    $res = $crud->AjouterApp($immobilier);
    if ($res) {

        echo header("location: ../view/apresinser.php");
    } else {
        echo 'probleme dinsertion';
    }
} else {
    include '../view/add.php';
}
