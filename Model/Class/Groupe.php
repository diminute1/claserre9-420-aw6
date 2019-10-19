<?php

class Groupe
{
    private $_nom_groupe, $_id_prof, $_session, $_annee;

    public function __construct()
    { }



    function get_nom_groupe()
    {
        return $this->_nom_groupe;
    }

    function set_nom_groupe($_nom_groupe)
    {
        $this->_nom_groupe = $_nom_groupe;
    }

    function get_id_prof()
    {
        return $this->_id_prof;
    }

    function set_id_prof($_id_prof)
    {
        $this->_id_prof = $_id_prof;
    }

    function get_session()
    {
        return $this->_session;
    }

    function set_session($_nom_session)
    {
        $this->_session = $_nom_session;
    }

    function get_annee()
    {
        return $this->_annee;
    }

    function set_annee($annee)
    {
        $this->_annee = $annee;
    }


    public function loadFromArray($t)
    {
        $this->_nom_groupe = $t['nom_groupe'];
        $this->_id_prof = $t['id_prof'];
        $this->_session  = $t['session'];
        $this->_annee = $t['annee'];
    }


    public function __toString()
    {
        return "Groupe :[" . $this->_nom_groupe . "," . $this->_id_prof . "," . $this->_session . "," . $this->_annee . "]" . "<br>";
    }
}
