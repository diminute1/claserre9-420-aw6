<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AfficherGroupeController implements IAction
{
	public function execute()
	{
		$groupe = $_REQUEST['id_groupe'];
		$data = EtudiantService::TrouverParGroupe($groupe);
		return new Page('view_groupe', "Profil | Groupe", $data, null);
	}
}
