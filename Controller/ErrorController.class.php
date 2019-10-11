<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Controller/AjouterGroupeAction.class.php';

class ErrorController implements IAction
{
	public function execute()
	{
		return new Page("erreur", "Erreur | Page introuvable", null, null);
	}
}
