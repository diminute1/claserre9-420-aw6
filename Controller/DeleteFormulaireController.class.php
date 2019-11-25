<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class DeleteFormulaireController implements IAction
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
			if(isset($_REQUEST['form'])){
				FormulaireDAO::delete($_REQUEST['form']);
			}
      $etu=EtudiantService::trouver($_SESSION['connected']);
      $data=RemiseService::trouverParGroupe($etu->getIdGroupe());
      return new Page('etuconnected', "Accueil", $data, null);
		}
		$data = GroupeDAO::find($_SESSION['connected']);
        return new Page('profilprof', "Mon profil", $data, null);
    }
}
