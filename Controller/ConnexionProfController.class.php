<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once('./Model/ProfesseurDAO.class.php');

class ConnexionprofController implements IAction
{
	public function execute()
	{
		if (isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['courriel']) && isset($_REQUEST['motdepasse'])) {
			if (ProfesseurDAO::verifierCourriel($_REQUEST['courriel'])) {
				$_REQUEST["messageConnexion"] = "Ce courriel existe déjà dans nos registres";
				$_REQUEST["theme"] = "danger";
				return new Page("connexionProf", "Connexion du professeur", null, null);
			} else if ($_REQUEST['motdepasse'] != $_REQUEST['c_motdepasse']) {
				$_REQUEST["messageConnexion"] = "Les mots de passe ne sont pas identiques";
				$_REQUEST["theme"] = "info";
				return new Page("connexionProf", "Connexion du professeur", null, null);
			} else {
				ProfesseurDAO::ajouter($_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["courriel"], $_REQUEST["motdepasse"]);
				$_REQUEST["messageConnexion"] = "Ce courriel existe déjà dans nos registres";
				$_REQUEST["theme"] = "success";
				return new Page("connexionProf", "Connexion du professeur", null, null);
			}
		}
	}
}
