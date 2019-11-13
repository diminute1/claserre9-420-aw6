<?php
require_once(__DIR__ . '/../../Exceptions/IllegalArgumentException.class.php');
class Groupe
{
    private $_id_groupe, $_id_prof, $_session, $_nom_groupe, $_annee;

    public function __construct($_id_groupe = "", $_id_prof = "", $_session = "", $_nom_groupe = "", $_annee = "")
    {
        $this->_id_groupe = $_id_groupe;
        $this->_id_prof = $_id_prof;
        $this->_session = $_session;
        $this->_nom_groupe = $_nom_groupe;
        $this->_annee = $_annee;
    }


    function get_id_groupe()
    {
        return $this->_id_groupe;
    }

    function set_id_groupe($_id_groupe)
    {
        $this->_id_groupe = $_id_groupe;
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

    function get_nom_groupe()
    {
        return $this->_nom_groupe;
    }

    function set_nom_groupe($_nom_groupe)
    {
        $this->_nom_groupe = $_nom_groupe;
    }

    function get_annee()
    {
        return $this->_annee;
    }

    function set_annee($annee)
    {
        $this->_annee = $annee;
    }

    public function VerifierIDProfPattern($id_prof)
    {
        if (filter_var($id_prof, FILTER_VALIDATE_EMAIL) == false) {
            throw new IllegalArgumentException("Le format de l'ID du professeur est incorrect !");
        }
    }

    public function loadFromArray($t)
    {

        $this->_id_groupe = $t['id_groupe'];
        $this->_id_prof = $t['id_prof'];
        $this->_session  = $t['session'];
        $this->_nom_groupe = $t['nom_groupe'];
        $this->_annee = $t['annee'];
    }


    public function __toString()
    {
        return "Groupe :[" . $this->_id_groupe . "," . $this->_id_prof . "," . $this->_session . "," . $this->_nom_groupe . "," . $this->_annee . "]";
    }
}
