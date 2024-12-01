<?php

$ref = $_GET['reference'];
require_once "../../model/CRUDVilla.php";
$crud = new CRUDVilla();
$delete = $crud->SupprimerVilla($ref);

if ($delete) {
    header("location:ListerVilla.php");
    exit;
} else {
    echo "pb de suppression";
}
