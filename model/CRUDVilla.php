<?php
include_once 'villa.php';
require_once 'config.php';
class CRUDVilla
{
    private $pdo;
    function __construct()
    {
        $connexion = new config();
        $this->pdo = $connexion->getConnexion();
    }
    function AjouterApp(villa $villa)
    {
        $ref = $villa->getReference();
        $prop = $villa->getProprietaire();
        $loc = $villa->getLocalite();
        $surface = $villa->getSurface();
        $domusage = $villa->getDomaineUsage();
        $nbrpiece = $villa->getNbPiece();
        $nbrEtage = $villa->getNbrEtage();
        $sql = "insert into immobiliere values('$ref','$prop','$loc',$surface, $nbrpiece,'$domusage','Appartement',$nbrEtage,null)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function RecupererVilla($ref)
    {
        $sql = "select * from immobiliere where reference='$ref'";
        $res = $this->pdo->query($sql);
        return $res;
    }
    function SupprimerVilla($ref)
    {
        $sql = "delete from immobiliere where reference='$ref'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ModifierVilla($villa)
    {
        $ref = $villa->getReference();
        $prop = $villa->getProprietaire();
        $loc = $villa->getLocalite();
        $surface = $villa->getSurface();
        $domusage = $villa->getDomaineUsage();
        $nbrpiece = $villa->getNbPiece();
        $nbrEtage = $villa->getNbrEtage();
        $sql = "update immobiliere set reference='$ref',proprietaire='$prop',localite='$loc',surface=$surface,nbPiece=$nbrpiece,domaineUsage='$domusage',Nature='Appartement',nbEtage=$nbrEtage where reference='$ref'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ListerVilla()
    {
        $sql = "select * from immobiliere";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
