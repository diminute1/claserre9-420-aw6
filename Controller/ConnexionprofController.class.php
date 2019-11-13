<?php

require_once './Controller/Action.interface.php';
require_once './View/page.class.php';
require_once './Model/DAO/ProfesseurDAO.class.php';

class ConnexionprofController implements IAction
{

    public function execute()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        
        if (isset($_REQUEST["moncourriel"]) && isset($_REQUEST["monmotdepasse"])) {
            $leprof = ProfesseurDAO::connecter($_REQUEST['moncourriel']);
            if ($leprof != null && password_verify($_REQUEST['monmotdepasse'], $leprof->getMotDePasse())) {
                $_REQUEST["messageConnexion"] = "Connexion réussie";
                $_SESSION['connected'] = $leprof->getCourriel();
                $_REQUEST["theme"] = "success";
                //$dao = new GroupeDAO();
                $data = GroupeDAO::find($_SESSION['connected']);
                return new Page('profilprof', "Mon profil", $data, null);
            } else {
                $_REQUEST["messageConnexion"] = "La connexion a échouée";
                $_REQUEST["theme"] = "danger";
                return new Page('portailprof', "Portail du professeur", null, null);
            }
        }

        $data = GroupeDAO::find($_SESSION['connected']);
        return new Page('profilprof', "Mon profil", $data, null);
    }
}
