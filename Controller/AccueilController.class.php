<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class AccueilController implements IAction
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
		if(EtudiantDAO::find($_SESSION["connected"])!=null){
			return new Page('etuconnected', "Accueil", null, null);
		}
		$data = GroupeDAO::find($_SESSION['connected']);
        return new Page('profilprof', "Mon profil", $data, null);
    }
}
