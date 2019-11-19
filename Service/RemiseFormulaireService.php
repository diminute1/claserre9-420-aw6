<?php
require_once './Model/DAO/RemiseFormulaireDAO.php';

class RemiseFormulaireService{

  public static function creer(RemiseFormulaire $x){
    return RemiseFormulaireDAO::create($x);
  }

  public static function chercherParRemise(String $id_groupe){
    return RemiseFormulaireDAO::findByRemise($id_groupe);
  }
}
