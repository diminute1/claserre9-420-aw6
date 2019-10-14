<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class PortailprofController implements IAction
{
	public function execute()
	{
		return new Page("portailprof", "Portail du professeur", null, null);
	}
}
