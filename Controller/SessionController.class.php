<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class SessionsController implements IAction
{
	public function execute()
	{
		return new Page('', "Accueil", null, null);
	}
}
