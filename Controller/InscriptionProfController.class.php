<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once('./Model/DAO/ProfesseurDAO.class.php');

class InscriptionprofController implements IAction
{
	public function execute()
	{
		if (isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['courriel']) && isset($_REQUEST['motdepasse'])) {
			if (ProfesseurDAO::verifierCourriel($_REQUEST['courriel'])) {
				$_REQUEST["messageConnexion"] = "Ce courriel existe déjà dans nos registres";
				$_REQUEST["theme"] = "danger";
				echo $_REQUEST["messageConnexion"];
				return new Page("connexionProf", "Connexion du professeur", null, null);
			} else if ($_REQUEST['motdepasse'] != $_REQUEST['c_motdepasse']) {
				$_REQUEST["messageConnexion"] = "Les mots de passe ne sont pas identiques";
				$_REQUEST["theme"] = "info";
				$_REQUEST["messageConnexion"];
				return new Page("connexionProf", "Connexion du professeur", null, null);
			} else {
				if (!isset($_SESSION)) {
					session_start();
				}
				ProfService::creer($_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["courriel"], $_REQUEST["motdepasse"]);
				$_SESSION['connected'] = $_REQUEST["courriel"];
				$_REQUEST["messageConnexion"] = "Vous êtes bien connectés";
				$_REQUEST["theme"] = "success";
				$_REQUEST["messageConnexion"];
				$data = GroupeService::trouverParProf($_SESSION['connected']);
				return new Page("profilprof", "Profil", $data, null);
			}
		}
		$data = GroupeService::trouverParProf($_SESSION['connected']);
		return new Page("profilprof", "Profil", $data, null);
	}
}
