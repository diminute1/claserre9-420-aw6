<?php
class Etudiant
{
    private $id, $mdp, $nom, $prenom, $note, $id_groupe;

    public function __construct($i = "", $n = "", $p = "", $m = "", $g = "")
    {
        $this->id = $i;
        $this->mdp = $m;
        $this->nom = $n;
        $this->prenom = $p;
        $this->note = 0;
        $this->id_groupe = $g;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($param)
    {
        $this->id = $param;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($param)
    {
        $this->mdp = $param;
    }

    public function getNote()
    {
        return $this->note;
    }
    public function setNote($param)
    {
        $this->note = $param;
    }

    public function getIdGroupe()
    {
        return $this->id_groupe;
    }
    public function setIdGroupe($param)
    {
        $this->id_groupe = $param;
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($param)
    {
        $this->nom = $param;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($param)
    {
        $this->prenom = $param;
    }


    public function __toString()
    {
        return "Etudiant[" . $this->id . "," . $this->nom . "," . $this->prenom . "," . $this->mdp . $this->note . "," . $this->id_groupe . "]";
    }


    public function loadFromArray($tab)
    {
        $this->id = $tab["id_etu"];
        $this->nom = $tab["nom"];
        $this->prenom = $tab["prenom"];
        $this->mdp = $tab["mdp"];
        $this->note = $tab["note"];
        $this->id_groupe = $tab["id_groupe"];
    }
}
