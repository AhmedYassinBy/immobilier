<?php
class villa
{
    protected $Reference, $Proprietaire, $Localite, $Surface, $NbPiece, $DomaineUsage, $nbrEtage;


    public function __construct($Reference, $Proprietaire, $Localite, $Surface, $NbPiece, $DomaineUsage, $nbrEtage)
    {
        $this->Reference = $Reference;
        $this->Proprietaire = $Proprietaire;
        $this->Localite = $Localite;
        $this->Surface = $Surface;
        $this->NbPiece = $NbPiece;
        $this->DomaineUsage = $DomaineUsage;
        $this->nbrEtage = $nbrEtage;
    }


    /**
     * Get the value of Reference
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Get the value of Proprietaire
     */
    public function getProprietaire()
    {
        return $this->Proprietaire;
    }

    /**
     * Get the value of Localite
     */
    public function getLocalite()
    {
        return $this->Localite;
    }

    /**
     * Get the value of Surface
     */
    public function getSurface()
    {
        return $this->Surface;
    }

    /**
     * Get the value of NbPiece
     */
    public function getNbPiece()
    {
        return $this->NbPiece;
    }

    /**
     * Get the value of DomaineUsage
     */
    public function getDomaineUsage()
    {
        return $this->DomaineUsage;
    }

    /**
     * Get the value of nbrEtage
     */
    public function getNbrEtage()
    {
        return $this->nbrEtage;
    }
}
