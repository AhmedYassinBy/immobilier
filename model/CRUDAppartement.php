<?php
include_once 'immobilier.php';
require_once 'config.php';
class CRUDAppartement
{
    private $pdo;
    function __construct()
    {
        $connexion = new config();
        $this->pdo = $connexion->getConnexion();
    }
    function AjouterApp(immobilier $immobiliere)
    {
        $ref = $immobiliere->getReference();
        $prop = $immobiliere->getProprietaire();
        $loc = $immobiliere->getLocalite();
        $surface = $immobiliere->getSurface();
        $domusage = $immobiliere->getDomaineUsage();
        $nbrpiece = $immobiliere->getNbPiece();
        $surfaceEspCom = $immobiliere->getSurfaceEspaceCommun();
        $sql = "insert into immobiliere values('$ref','$prop','$loc',$surface, $nbrpiece,'$domusage','Appartement',null,$surfaceEspCom)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function RecupererApp($ref)
    {
        $sql = "select * from immobiliere where reference='$ref'";
        $res = $this->pdo->query($sql);
        return $res;
    }
    function SupprimerApp($ref)
    {
        $sql = "delete from immobiliere where reference='$ref'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ModifierApp($immobiliere)
    {
        $ref = $immobiliere->getReference();
        $prop = $immobiliere->getProprietaire();
        $loc = $immobiliere->getLocalite();
        $surface = $immobiliere->getSurface();
        $domusage = $immobiliere->getDomaineUsage();
        $nbrpiece = $immobiliere->getNbPiece();
        $surfaceEspCom = $immobiliere->getSurfaceEspaceCommun();
        $sql = "update immobiliere set reference='$ref',proprietaire='$prop',localite='$loc',surface=$surface,nbPiece=$nbrpiece,domaineUsage='$domusage',Nature='Appartement',surfaceCommune=$surfaceEspCom where reference='$ref'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ListerApp()
    {
        $sql = "select * from immobiliere";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
