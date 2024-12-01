<?php
class config
{
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=gestionimmobiliere";
        $user = 'root';
        $pw = '';
        $this->pdo = new pdo($dsn, $user, $pw);
    }
    function getConnexion()
    {
        return $this->pdo;
    }
}
