<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class InscrireController implements IAction
{
	public function execute()
	{
		return new Page("connexionProf", "Connexion du professeur", null, null);
	}
}
