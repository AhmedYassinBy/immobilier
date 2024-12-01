<?php

$ref = $_GET['reference'];
require_once "../model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$delete = $crud->SupprimerApp($ref);

if ($delete) {
    header("location:ListerAppartement.php");
    exit;
} else {
    echo "pb de suppression";
}
