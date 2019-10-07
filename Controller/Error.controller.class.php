<?php
require_once('./Controleur/Action.interface.php');
require_once('./View/Page.class.php');

class ErreurControleur implements IAction
{
	public function execute()
	{
		return new Page("erreur", "Erreur | Page introuvable", null, null);
	}
}
