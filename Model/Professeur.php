<?php
class Professeur {
    private $nom, $prenom, $courriel, $motdepasse;
    
    public function __construct($nom="",$prenom="",$courriel="",$motdepasse=""){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->courriel = $courriel;
        $this->motdepasse = $motdepasse;
    }
 
    public function getNom() {
        return $this->nom;
        
    }
    
    public function setNom($param) {
        $this->nom=$param;
        
    }

    public function getPrenom() {
        return $this->nom;
        
    }
    
    public function setPrenom($param) {
        $this->nom=$param;
        
    }
    
    public function getMotDePasse() {
        return $this->motdepasse;
        
    }
    
    public function setMotDePasse($param) {
        $this->motdepasse=$param;
        
    }

    public function getCourriel() {
        return $this->courriel;
        
    }
    
    public function setCourriel($param) {
        $this->courriel=$param;
        
    }

    
    public function __toString() {
        return "Professeur[".$this->nom.",".$this->prenom.",".$this->courriel."]";
    }

    
    public function loadFromArray($tab){
        $this->nom = $tab["nom"];
        $this->nom = $tab["prenom"];
        $this->prenom = $tab["courriel"];
        $this->mdp = $tab["motdepasse"];
        
    }
    
    
}