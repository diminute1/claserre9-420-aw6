<?php
require_once('action.interface.php');
require_once('./Service/EtudiantService.php');
require_once('./Service/GroupeService.php');
require_once './Model/DAO/etudiantDAO.php';
class AjouterEtudiantController implements IAction
{
    public function execute()
    {
		$data = GroupeService::trouverParProf($_SESSION['connected']);
        if (!isset($_SESSION['connected']))
            session_start();
        $resultat = TRUE;
        if (isset($_REQUEST['id']) && isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['mdp'])) {
            $etu = new Etudiant();
			$etu->setId($_REQUEST['id']);
			$etu->setNom($_REQUEST['nom']);
			$etu->setPrenom($_REQUEST['prenom']);
			$etu->setMdp($_REQUEST['mdp']);
			$etu->setIdGroupe($_REQUEST['idgroupe']);
			EtudiantService::creer($etu);
            return new Page('profilprof', "Profil", $data, null);
        }
        return new Page("accueil", "Erreur", null, null);
    }
}
