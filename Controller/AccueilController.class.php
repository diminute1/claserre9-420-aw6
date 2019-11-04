<?php

require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AccueilController implements IAction {

    public function execute() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['connected'])) {
            return new Page('accueil', "Accueil", null, null);
        }
        if (EtudiantService::trouver($_SESSION['connected'])) {
            return new Page('etuconnected', "Accueil", null, null);
        }
        $data = GroupeService::trouverParProf($_SESSION['connected']);
        return new Page('profilprof', "Mon profil", $data, null);
    }

}
