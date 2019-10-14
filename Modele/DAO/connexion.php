<?php
require_once './Modele/DAO/config.php'; 

class Connection implements IDAO
{
    private static $instance = null;

    private function __construct()
    { }

    /**
     * Méthode de connexion avec la base de données
     *
     * @return $instance
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new PDO(
                "mysql:host=" . IDAO::host. 
                ";dbname=" . IDAO::dbname . 
                ";charset=utf8",
                IDAO::user,
                IDAO::password
            );
        }
        return self::$instance;
        
    }
}
