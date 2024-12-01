
<?php
require_once "../../model/CRUDVilla.php";
$crud = new CRUDVilla();
$villa = $crud->ListerVilla();
include "../../view/villa/ListerVilla.php";
