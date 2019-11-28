<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AfficherProfilController implements IAction
{
    public function execute()
    {
        $etu = EtudiantService::trouver($_REQUEST['id']);
        return new Page('liste_activites', "Profil de l'étudiant", $etu, null);
    }
}
