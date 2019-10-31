<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class PortailetuController implements IAction
{
	public function execute()
	{
		return new Page("portailetu", "Portail de l'étudiant", null, null);
	}
}
