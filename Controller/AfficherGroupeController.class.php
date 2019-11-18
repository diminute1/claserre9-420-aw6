<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AffichergroupeController implements IAction
{
	public function execute()
	{
		if(isset($_REQUEST['id'])) $id_groupe = $_REQUEST['id'];
		$data = EtudiantDAO::findByGroupe($id_groupe);
		return new Page('view_groupe', "Profil | Groupe", $data, null);
	}
}
