<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Model/Class/Remise.php';
require_once './Model/DAO/RemiseDAO.php';

class AfficherRemiseController implements IAction
{
  public function execute(){

    if(isset($_REQUEST["id"])){
      $id_groupe=$_REQUEST["id"];
    }
    $remise=RemiseService::Trouver($_REQUEST["date"]);
    $data=array(
      "etu" => EtudiantService::TrouverParGroupe($id_groupe),
  		"groupe" => GroupeService::trouver($id_groupe),
  		"remise" => $remise,
      "forms" => RemiseFormulaireService::chercherParRemise($remise->getId()),
	);
    return new Page("afficherRemises","Remises",$data,null);
  }
}
