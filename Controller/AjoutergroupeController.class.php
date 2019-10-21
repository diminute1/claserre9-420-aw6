<?php
require_once('action.interface.php');
require_once './Model/DAO/groupeDAO.php';
class AjoutergroupeController implements IAction {
	public function execute() {
        
        $resultat = TRUE;
        if (!isset($_REQUEST['NOM'])) {
            $_REQUEST["messages"]["NOM"] = "Nom du groupe obligatoire";
            $resultat = FALSE;
        }
        if (!isset($_REQUEST['SESSION'])) {
            $_REQUEST["messages"]["SESSION"] = "Session obligatoire";
            $resultat = FALSE;
        }

        if ($resultat) {
            $n =$_REQUEST['NOM'];
        $c =$_REQUEST['SESSION'];
            
            $groupe = new Groupe();
            $groupe->set_nom_groupe($n);
            $groupe->set_session($c);
            $dao = new GroupeDAO();
            $dao->createGroupe($groupe);
            return new Page("groupe","Résultat",null,null);
        }
        return new Page("accueil","Erreur",null,null);
}
}
    





