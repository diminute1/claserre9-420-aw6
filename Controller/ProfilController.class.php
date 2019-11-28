<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class ProfilController implements IAction
{
	public function execute()
	{
		if (!isset($_SESSION)) {
			session_start();
		}
		if (!isset($_SESSION["connected"])) {
			return new Page('accueil', "Accueil", null, null);
		}
		if (isset($_SESSION['type_utilisateur']) && $_SESSION['type_utilisateur'] == 'etudiant') {
			$etu = EtudiantService::trouver($_SESSION['connected']);
		}
		return new Page('profiletu', "Mon profil", $etu, null);
	}
}
