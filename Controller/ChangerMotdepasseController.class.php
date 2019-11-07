<?php
require_once('action.interface.php');
require_once './Model/DAO/EtudiantDAO.php';
require_once './Model/DAO/ProfesseurDAO.class.php';


class ChangerMotdepasseController implements IAction
{
    public function execute()
    {

        if (isset($_POST["oldmdp"]) && isset($_POST["newmdp"]) && isset($_POST["newmdp_rpt"])) {
			
			return new Page('profilprof', "Profil", null, null);
			/*if (ctype_digit($session['connected'] && $_POST["newmdp"] == $_POST["newmdp_rpt"])) {
				/*$etu = EtudiantDAO::find($session['connected']);
				$etu->setMdp($_POST["newmdp"]);
				EtudiantDAO::update($etu);
				return new Page('profilprof', "Profil", null, null);
			}
			if ($session['connected'] != null){
				/*$prof = ProfesseurDAO::find($session['connected']);
				$prof->setMotDePasse($_POST["newmdp"]);
				ProfesseurDAO::update($prof);
				return new Page('profilprof', "Profil", null, null);
			} */
		}
		
        return new Page("accueil", "Erreur", null, null);
    }
}