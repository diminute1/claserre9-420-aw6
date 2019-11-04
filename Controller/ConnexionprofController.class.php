<?php

require_once './Controller/Action.interface.php';
require_once './View/page.class.php';
require_once './Model/DAO/ProfesseurDAO.class.php';
require_once('./Service/GroupeService.php');
require_once('./Service/ProfService.php');


class ConnexionprofController implements IAction
{

    public function execute()
    {
        if (isset($_REQUEST["moncourriel"]) && isset($_REQUEST["monmotdepasse"])) {
            if (!isset($_SESSION)) {
                session_start();
            }
            $leprof = ProfService::connecter($_REQUEST['moncourriel']);
            if ($leprof != null && password_verify($_REQUEST['monmotdepasse'], $leprof->getMotDePasse())) {
                $_REQUEST["messageConnexion"] = "Connexion réussie";
                $_SESSION['connected'] = $leprof->getCourriel();
                $_REQUEST["theme"] = "success";
                //$dao = new GroupeDAO();
                $data = GroupeService::trouverParProf($_SESSION['connected']);
            } else {
                $_REQUEST["messageConnexion"] = "La connexion a échouée";
                $_REQUEST["theme"] = "danger";
                return new Page('portailprof', "Portail du professeur", null, null);
            }
        }

        //$dao = new GroupeDAO();
        $data = GroupeService::trouverParProf($_SESSION['connected']);
        return new Page('profilprof', "Mon profil", $data, null);
    }
}
