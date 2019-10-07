<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of etudiant
 *
 * @author User
 */
class Etudiant {
    private $id, $mdp, $nom, $prenom;
    
    public function __construct($i="",$n="",$p="",$m=""){
        $this->id = $i;
        $this->mdp = $m;
        $this->nom = $n;
        $this->prenom = $p;
    }
 
    public function getId() {
        return $this->id;
        
    }
    
    public function setId($param) {
        $this->id=$param;
        
    }
    
    public function getMdp() {
        return $this->mdp;
        
    }
    
    public function setMdp($param) {
        $this->mdp=$param;
        
    }
    
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    
    public function __toString() {
        return "Etudiant[".$this->id.",".$this->nom.",".$this->prenom.",".$this->mdp."]";
    }

    
    public function loadFromArray($tab){
        $this->id = $tab["id_etu"];
        $this->nom = $tab["nom"];
        $this->prenom = $tab["prenom"];
        $this->mdp = $tab["mdp"];
        
    }
    
    
    }
