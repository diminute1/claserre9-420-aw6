<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formulaire
 *
 * @author estes
 */
class Formulaire {

    private $id, $sport, $id_etu, $bpm, $note, $type;

    public function __construct() {
        
    }

    public function setId($param) {
        $this->id = $param;
    }
    public function getId() {
        return $this->id;
    }
    
    public function setSport($param) {
        $this->sport = $param;
    }
    public function getSport() {
        return $this->sport;
    }
    
    public function setIdEtu($param) {
        $this->id_etu = $param;
    }
    public function getIdEtu() {
        return $this->id_etu;
    }
    
    public function setBpm($param) {
        $this->bpm = $param;
    }
    public function getBpm() {
        return $this->bpm;
    }
    
    public function setNote($param) {
        $this->note = $param;
    }
    public function getNote() {
        return $this->note;
    }
    
    public function setType($param) {
        $this->type = $param;
    }
    public function getType() {
        return $this->type;
    }
    
    public function __toString() {
        return "Formulaire[".$this->id.",".$this->sport.",".$this->id_etu.",".$this->bpm.",".$this->note.",".$this->type."]";
    }
    
    public function loadFromArray($tab){
        $this->id = $tab["id_etu"];
        $this->id_etu = $tab["nom"];
        $this->sport = $tab["prenom"];
        $this->bpm = $tab["mdp"];
        $this->note = $tab["note"];
        $this->type = $tab["id_groupe"];
        
    }

}
