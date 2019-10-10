<?php
require_once './Controller/AccueilController.class.php';
require_once './Controller/ErrorController.class.php';
require_once './Controller/ConnexionController.class.php';
require_once './Controller/DeconnexionController.class.php';
require_once './Controller/NewlistController.class.php';
class Routeur
{
    public static function getAction($nomAction)
    {
        $classe = ucfirst($nomAction) .'Controller';
        if (class_exists($classe)) {
            return new $classe();
        } else {
            return new ErrorController();
        }
    }
}