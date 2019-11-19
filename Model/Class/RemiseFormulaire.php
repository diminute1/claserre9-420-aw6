<?php
class RemiseFormulaire{
  private $id_form="",$id_etu="",$id_remise="",$note="",$com="";


  function __construct(){

  }

  public function setEtu($val){
    $this->id_etu=$val;
  }
  public function getEtu(){
    return $this->id_etu;
  }

  public function setForm($val){
    $this->id_form=$val;
  }
  public function getForm(){
    return $this->id_form;
  }

  public function setNote($val){
    $this->note=$val;
  }
  public function getNote(){
    return $this->note;
  }

  public function setCommentaire($val){
    $this->com=$val;
  }
  public function getCommentaire(){
    return $this->com;
  }

  public function setRemise($val){
    $this->id_remise=$val;
  }
  public function getRemise(){
    return $this->id_remise;
  }

  public function loadFromArray($tab) {
      $this->id_etu = $tab["id_etu"];
      $this->id_form = $tab["id_form"];
      $this->id_remise = $tab["id_remise"];
      $this->com = $tab["commentaire"];
      $this->note = $tab["note"];
  }
}
