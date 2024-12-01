<?php
class immobilier
{
    protected $Reference, $Proprietaire, $Localite, $Surface, $NbPiece, $DomaineUsage, $SurfaceEspaceCommun;


    public function __construct($Reference, $Proprietaire, $Localite, $Surface, $NbPiece, $DomaineUsage, $SurfaceEspaceCommun)
    {
        $this->Reference = $Reference;
        $this->Proprietaire = $Proprietaire;
        $this->Localite = $Localite;
        $this->Surface = $Surface;
        $this->NbPiece = $NbPiece;
        $this->DomaineUsage = $DomaineUsage;
        $this->SurfaceEspaceCommun = $SurfaceEspaceCommun;
    }



    /**
     * Get the value of DomaineUsage
     */
    public function getDomaineUsage()
    {
        return $this->DomaineUsage;
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
     * Get the value of SurfaceEspaceCommun
     */
    public function getSurfaceEspaceCommun()
    {
        return $this->SurfaceEspaceCommun;
    }
}
