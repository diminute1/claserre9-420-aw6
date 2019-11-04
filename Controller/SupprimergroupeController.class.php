<?php
require_once('action.interface.php');
require_once('./Service/GroupeService.php');
class SupprimergroupeController implements IAction
{
    public function execute()
    {

        $resultat = TRUE;
        if (!isset($_REQUEST['id'])) {
            $_REQUEST["messages"]["NOM"] = "Nom du groupe obligatoire";
            $resultat = FALSE;
        }

        if ($resultat) {
            $n = $_REQUEST['id'];

            GroupeService::supprimer($n);
            $x = GroupeService::trouverParProf($_SESSION['connected']);
            return new Page("profilprof", "Mon profil", $x, null);
        }
        return new Page("accueil", "Erreur", null, null);
    }
}
