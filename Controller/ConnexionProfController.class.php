<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once('./Model/ProfesseurDAO.class.php');

class ConnexionprofController implements IAction
{
	public function execute()
	{
		if (isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['courriel']) && isset($_REQUEST['motdepasse'])){
			if (ProfesseurDAO::verifierCourriel($_REQUEST['courriel'])){
				return new Page("connexionProf", "Connexion du professeur", null, null);
				$_REQUEST["erreurConnexion"] = "Ce courriel existe déjà dans nos registres";
			}else{
				$professeur = ProfesseurDAO::ajouter($_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["courriel"], $_REQUEST["motdepasse"]);
				$_REQUEST["SuccesConnexion"] = "Ce courriel existe déjà dans nos registres";
			}

		}
		return new Page("connexionProf", "Connexion du professeur", null, null);       
	}
}