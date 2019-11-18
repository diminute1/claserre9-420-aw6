<?php

require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class DeconnexionController implements IAction
{

    public function execute()
    {
        unset($_SESSION["connected"]);
        unset($_SESSION["type_utilisateur"]);
        session_destroy();
        return new Page('accueil', "Accueil", null, null);
    }
}
