<?php

require_once './Controller/Action.interface.php';
require_once './View/page.class.php';
require_once './Model/DAO/ProfesseurDAO.class.php';

class ConnexionprofController implements IAction {

    public function execute() {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_POST["moncourriel"]) && isset($_POST["monmotdepasse"])) {
            $leprof = ProfesseurDAO::connecter($_POST['moncourriel']);
            if ($leprof!= null && password_verify($_POST['monmotdepasse'],$leprof->getMotDePasse())) {
                $_SESSION['connected'] = $leprof->getCourriel();
                $_REQUEST["theme"] = "success";
            } else {
                return new Page('portailprof', "Portail du professeur", null, null);
                $_REQUEST["theme"] = "danger";
            }
        }
        return new Page('profilprof', "Accueil", null, null);
    }


}
