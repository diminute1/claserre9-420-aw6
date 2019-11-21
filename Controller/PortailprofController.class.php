<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class PortailprofController implements IAction
{
	public function execute()
	{
		if (!isset($_SESSION['connected']))
			return new Page("portailprof", "Portail du professeur", null, null);
		if (EtudiantService::trouver($_SESSION['connected'])) {
			return new Page('etuconnected', "Accueil", null, null);
		}
		$data = GroupeService::trouverParProf($_SESSION['connected']);
		return new Page('profilprof', "Mon profil", $data, null);
	}
}
