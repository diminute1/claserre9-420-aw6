<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once('./Model/DAO/groupeDAO.php');

class CreergroupeController implements IAction
{
    public function execute()
    {
        $dao = new GroupeDAO();
        $data = $dao->find($_SESSION['connected']);

        if (isset($_REQUEST["nomGroupe"]) && isset($_REQUEST["lasession"]) && isset($_REQUEST["annee"]) && isset($_SESSION['connected'])) {
            $legroupe = new Groupe();
            $legroupe->set_nom_groupe($_REQUEST["nomGroupe"]);
            $legroupe->set_id_prof($_SESSION['connected']);
            $legroupe->set_session($_REQUEST["lasession"]);
            $legroupe->set_annee($_REQUEST["annee"]);

            GroupeDAO::createGroupe($legroupe);
            $_REQUEST['ajoutgroupe'] = "Le groupe a été bien créé";

            return new Page('profilprof', "Profil", $data, null);
        }
        return new Page('profilprof', "Profil", $data, null);
    }
}
