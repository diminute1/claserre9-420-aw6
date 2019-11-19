<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Model/Class/Remise.php';
require_once './Model/Class/RemiseFormulaire.php';
require_once './Service/RemiseFormulaireService.php';

class AjouterRemiseController implements IAction
{
  public function execute(){

    if(isset($_REQUEST['id'])) $id_groupe = $_REQUEST['id'];
    $remise=new Remise($id_groupe);
    if(isset($_REQUEST['date'])){
      $remise->setDate($_REQUEST['date']);
      $remise->setId(uniqid());
      $remise=RemiseDAO::create($remise);
    }
		$data=array(
      "etu" => EtudiantService::TrouverParGroupe($id_groupe),
  		"groupe" => GroupeService::trouver($id_groupe),
  		"remise" => RemiseService::TrouverParGroupe($id_groupe),
	);
  foreach ($data["etu"] as $etu) {
    $new  =new RemiseFormulaire();
    $new->setEtu($etu->getId());
    $new->setRemise($remise->getId());
    RemiseFormulaireService::creer($new);
  }
		return new Page('view_groupe', "Profil | Groupe", $data, null);
  }
}
