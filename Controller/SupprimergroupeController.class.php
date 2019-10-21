<?php
require_once('action.interface.php');
require_once './Model/DAO/groupeDAO.php';
class SupprimergroupeController implements IAction {
	public function execute() {
        
        $resultat = TRUE;
        if (!isset($_REQUEST['id'])) {
            $_REQUEST["messages"]["NOM"] = "Nom du groupe obligatoire";
            $resultat = FALSE;
        }

        if ($resultat) {
            $n =$_REQUEST['id'];
            
            $dao = new GroupeDAO();
            $dao->deleteGroupe($n);
            return new Page("groupe","Résultat",null,null);
        }
        return new Page("accueil","Erreur",null,null);
}
}