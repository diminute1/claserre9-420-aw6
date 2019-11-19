<?php
require_once './Model/DAO/RemiseDAO.php';

class RemiseService{

  public static function creer(Remise $x){
    return RemiseDAO::create($x);
  }

  public static function trouverParGroupe(String $id_groupe){
    return RemiseDAO::findByGroupe($id_groupe);
  }

  public static function Trouver(String $id){
    return RemiseDAO::findById($id);
  }
}
