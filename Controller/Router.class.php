<?php
require_once './Controller/AccueilController.class.php';
require_once './Controller/ErrorController.class.php';
require_once './Controller/PortailprofController.class.php';
require_once './Controller/InscriptionprofController.class.php';
require_once './Controller/PortailetuController.class.php';
require_once './Controller/ConnexionetuController.class.php';
require_once './Controller/ConnexionprofController.class.php';
require_once './Controller/NewlistController.class.php';
require_once './Controller/DeconnexionController.class.php';
require_once './Controller/AjoutergroupeController.class.php';
require_once './Controller/SupprimergroupeController.class.php';
require_once './Controller/GroupeController.class.php';
require_once './Controller/CreergroupeController.class.php';
require_once './Controller/AfficherGroupeController.class.php';
require_once './Controller/GetFormulaireController.class.php';
require_once './Controller/CorrigerFormulaireController.class.php';
require_once './Controller/NewFormController.class.php';
require_once './Controller/AfficherActiviteController.class.php';
require_once './Controller/EnvoyerCorrectionController.class.php';
class Routeur
{
    public static function getAction($nomAction)
    {
        $classe = ucfirst($nomAction) . 'Controller';
        if (class_exists($classe)) {
            return new $classe();
        } else {
            return new ErrorController();
        }
    }
}
