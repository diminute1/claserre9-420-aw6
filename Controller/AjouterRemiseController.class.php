<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Model/Class/Remise.php';
require_once './Model/DAO/RemiseDAO.php';

class AjouterRemiseController implements IAction
{
  public function execute(){
    if(isset($_REQUEST['id'])) $id_groupe = $_REQUEST['id'];
    if(isset($_REQUEST['date'])){
      $remise=new Remise($id_groupe);
      $remise->setDate($_REQUEST['date']);
      RemiseDAO::create($remise);
    }
		$data=array(
		"etu" => EtudiantDAO::findByGroupe($id_groupe),
		"groupe" => GroupeDAO::findById($id_groupe),
		"remise" => RemiseDAO::findByGroupe($id_groupe),
	);
		return new Page('view_groupe', "Profil | Groupe", $data, null);
  }
}
