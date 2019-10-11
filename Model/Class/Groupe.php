<?php

class Groupe{
     var $_id_groupe;
     var $_id_prof;
     var $_session;
     var $_nom_groupe;
                     

    
     function get_id_groupe() {
         return $this->_id_groupe;
     }

     function get_id_prof() {
         return $this->_id_prof;
     }

     function get_session() {
         return $this->_session;
     }

     function get_nom_groupe() {
         return $this->_nom_groupe;
     }

     function set_nom_groupe($_nom_groupe) {
         $this->_nom_groupe = $_nom_groupe;
     }
     function set_session($_nom_session) {
         $this->_session = $_session;
     }
     function set_id_groupe($_nom_groupe) {
         $this->_id_groupe = $_id_groupe;
     }

     public function loadFromArray($t){

        $this->_id_groupe = $t['ID'];
        $this->_session  = $t['SESSION'];
        $this->_nom_groupe = $t['NOM'];
     }

    
     public function __toString() {
        return "Groupe :[".$this->_id_groupe.",".$this->_session.",".$this->_nom_groupe."]";
    }


    
    }

 ?>