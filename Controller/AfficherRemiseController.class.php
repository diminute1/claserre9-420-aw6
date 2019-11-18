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
    $data=array(
		"etu" => EtudiantDAO::findByGroupe($id_groupe),
		"groupe" => GroupeDAO::findById($id_groupe),
		"remise" => RemiseDAO::findByGroupe($id_groupe),
	);
    return new Page("afficherRemises","Remises",$data,null);
  }
}
