<?php

require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class DeconnexionController implements IAction {

    public function execute() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['connected'])){
            return new Page('accueil', "Accueil", null, null);
        }
        session_destroy();
        session_abort();
        return new Page('accueil', "Accueil", null, null);
    }

}
