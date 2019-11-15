<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class ProfilController implements IAction
{
    public function execute()
    {
		if(!isset($_SESSION))
		{
			session_start();
		}
		if(!isset($_SESSION["connected"]))
		{
			return new Page('accueil', "Accueil", null, null);
		}
        return new Page('vueprofil', "Mon profil", null, null);
    }
}
