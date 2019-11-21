<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once('./View/Data.class.php');
require_once './Model/Class/Remise.php';
require_once './Service/RemiseService.php';

class AffichergroupeController implements IAction
{
	public function execute()
	{
		if (isset($_REQUEST['id'])) $id_groupe = $_REQUEST['id'];
		$data = array(
			"etu" => EtudiantService::TrouverParGroupe($id_groupe),
			"groupe" => GroupeService::trouver($id_groupe),
			"remise" => RemiseService::TrouverParGroupe($id_groupe),
		);
		return new Page('view_groupe', "Profil | Groupe", $data, null);
		//return new Data($data, 200);
	}
}
