<?php
require_once(__DIR__ . '/../../Exceptions/IllegalArgumentException.class.php');
class Professeur
{
    private $nom, $prenom, $courriel, $motdepasse;

    public function __construct($courriel = "", $nom = "", $prenom = "", $motdepasse = "")
    {
        $this->courriel = $courriel;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->motdepasse = $motdepasse;
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

    public function getMotDePasse()
    {
        return $this->motdepasse;
    }

    public function setMotDePasse($param)
    {
        $this->motdepasse = $param;
    }

    public function getCourriel()
    {
        return $this->courriel;
    }

    public function setCourriel($param)
    {
        $this->courriel = $param;
    }


    public function __toString()
    {
        return "Professeur[" . $this->nom . "," . $this->prenom . "," . $this->courriel . "]";
    }

    public function VerifierEmailPattern($courriel)
    {
        if (filter_var($courriel, FILTER_VALIDATE_EMAIL) == false) {
            throw new IllegalArgumentException("Le format du courriel n'est pas correct !");
        }
    }

    public function loadFromArray($tab)
    {
        $this->courriel = $tab["courriel"];
        $this->nom = $tab["nom"];
        $this->prenom = $tab["prenom"];
        $this->motdepasse = $tab["motdepasse"];
    }
}
