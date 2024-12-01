
<?php
require_once "../model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$appartements = $crud->ListerApp();
include "../view/ListerAppartement.php";
