<?php
require_once('action.interface.php');
require_once './Model/DAO/EtudiantDAO.php';
require_once './Model/DAO/ProfesseurDAO.class.php';


class ChangerMotdepasseController implements IAction
{
    public function execute()
    {
    	if (!isset($_SESSION) ){
    		session_start();
    	}

        if (isset($_POST["oldmdp"]) && isset($_POST["newmdp"]) && isset($_POST["newmdp_rpt"]) && $_POST["newmdp"] == $_POST["newmdp_rpt"]) {
			
			
			if (EtudiantDAO::find($_SESSION['connected'])!=null ){
				$etu = EtudiantDAO::find($_SESSION['connected']);
				$etu->setMdp(password_hash($_POST["newmdp"], PASSWORD_DEFAULT));
				EtudiantDAO::update($etu);
				return new Page('portailetu', "Profil", null, null);
			}
			if (ProfesseurDAO::find($_SESSION['connected'])!=null ){
				$prof = ProfesseurDAO::find($_SESSION['connected']);
				$prof->setMotDePasse(password_hash($_POST["newmdp"], PASSWORD_DEFAULT));
				ProfesseurDAO::update($prof);
				return new Page('portailprof', "Profil", null, null);
			} 
		}
		
        return new Page("accueil", "Erreur", null, null);
    }
}
