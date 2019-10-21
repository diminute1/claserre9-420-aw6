<?php

class Groupe
{
    var $_id_groupe;
    var $_id_prof;
    var $_session;
    var $_nom_groupe;
    var $_annee;



    function get_id_groupe()
    {
        return $this->_id_groupe;
    }

    function get_id_prof()
    {
        return $this->_id_prof;
    }

    function get_session()
    {
        return $this->_session;
    }

    function get_nom_groupe()
    {
        return $this->_nom_groupe;
    }

    function get_annee()
    {
        return $this->_annee;
    }

    function set_nom_groupe($_nom_groupe)
    {
        $this->_nom_groupe = $_nom_groupe;
    }
    function set_session($_nom_session)
    {
        $this->_session = $_nom_session;
    }
    function set_id_groupe($_nom_groupe)
    {
        $this->_id_groupe = $_id_groupe;
    }

    function set_annee($annee)
    {
        $this->_annee = $annee;
    }

    public function loadFromArray($t)
    {

        $this->_id_groupe = $t['id_groupe'];
        $this->_session  = $t['session'];
        $this->_nom_groupe = $t['nom_groupe'];
        $this->_annee = $t['annee'];
        $this->_id_prof = $t['id_prof'];
    }


    public function __toString()
    {
        return "Groupe :[" . $this->_id_groupe . "," . $this->_session . "," . $this->_nom_groupe . "]";
    }
}
