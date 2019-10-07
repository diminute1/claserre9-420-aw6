<?php

class Groupe{
     var $_id_groupe;
     var $_id_prof;
    
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

    var $_session;
    var $_nom_groupe;
    

    
    }

 ?>