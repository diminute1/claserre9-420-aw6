<?php
require_once('action.interface.php');
require_once('./View/Section/groupe.php');
require_once './Model/DAO/groupeDAO.php';
/*class AjouterGroupeAction implements Action {
	public function ajouterGroupe() {
        $n =$_REQUEST['NOM'];
        $c =$_REQUEST['SESSION'];
        $m =$_REQUEST['ID'];
        $resultat = TRUE;
        if ($n == "") {
            $_REQUEST["messages"]["NOM"] = "Nom du groupe obligatoire";
            $resultat = FALSE;
        }
        if ($c == "") {
            $_REQUEST["messages"]["SESSION"] = "Session obligatoire";
            $resultat = FALSE;
        }
        if ($m == "") {
            $_REQUEST["messages"]["ID"] = "ID groupe obligatoire";
            $resultat = FALSE;
        }
        if ($resultat) {
            echo "<script>alert('Inscription validée')</script>";
            $groupe = new Groupe();
            $groupe->set_nom_groupe($n);
            $groupe->setCourriel($c);
            $dao = new UserDAO();
            $dao->createGroupe($groupe);
        }
        return $resultat;
}
}
    
}
}*/



