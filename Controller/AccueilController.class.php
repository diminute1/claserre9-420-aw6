<?php

require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AccueilController implements IAction
{

    public function execute()
    {
        $accueil = 'accueil';
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['connected'])) {
            $accueil = "connected";
        }
        return new Page($accueil, "Accueil", null, null);
    }
}
