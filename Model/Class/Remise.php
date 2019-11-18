<?php


class Remise
{
  private $id_groupe="",$date="";
   function __construct($groupe = ""){
     $this->id_groupe=$groupe;
   }

   public function setDate($value)
   {
     $this->date=$value;
   }
   public function setGroupe($value)
   {
     $this->id_groupe=$value;
   }

   public function getDate()
   {
     return $this->date;
   }
   public function getGroupe()
   {
     return $this->id_groupe;
   }

   public function loadFromArray($tab) {
       $this->id_groupe = $tab["id_groupe"];
       $this->date = $tab["date_remise"];
   }
}
