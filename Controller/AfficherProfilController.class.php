<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once('./Model/DAO/EtudiantDAO.php');

class AfficherProfilController implements IAction
{
    public function execute()
    {
        $etu = EtudiantService::trouver($_REQUEST['id']);
        echo $etu;
        return new Page('profiletu', "Profil de l'étudiant", $etu, null);
    }
}
