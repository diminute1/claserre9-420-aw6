<?php
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Model/Class/Remise.php';
require_once './Model/DAO/RemiseDAO.php';

class AfficherRemiseController implements IAction
{
  public function execute(){
    return new Page("afficherRemises","Remises",null,null);
  }
}
