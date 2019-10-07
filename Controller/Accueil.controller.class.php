<?php
require_once('./Controller/Action.interface.php');
require_once('./Vue/Page.class.php');

class AccueilController implements IAction
{
	/**
	 * Méthode pour afficher la page d'accueil
	 *
	 * @return $page
	 */
	public function execute()
	{
		return new Page('accueil', "Accueil", null, null);
	}
}
