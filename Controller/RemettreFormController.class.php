<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');

class RemettreFormController implements IAction
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
    $form=FormulaireService::trouver($_SESSION['formulaire']);
    $remiseform=RemiseFormulaireService::trouver
    $etu=EtudiantService::trouver($_SESSION['connected']);
    $data=RemiseService::trouverParGroupe($etu->getIdGroupe());
    return new Page('etuconnected', "Accueil", $data, null);
      }
}
