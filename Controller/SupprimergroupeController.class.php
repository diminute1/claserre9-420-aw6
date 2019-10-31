<?php
require_once('action.interface.php');
require_once './Model/DAO/groupeDAO.php';
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

            $dao = new GroupeDAO();
            $dao->deleteGroupe($n);
            $x = $dao->find($_SESSION['connected']);
            return new Page("profilprof", "Mon profil", $x, null);
        }
        return new Page("accueil", "Erreur", null, null);
    }
}
