<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExerciceTemps
 *
 * @author estes
 */
class ExerciceTemps {

    private $id, $id_form, $nom, $duree;

    public function __construct($form ="") {
        $id= uniqid();
        $id_form =$form ;
        $nom ="";
        $duree=0;
    }

    public function setId($param) {
        $this->id = $param;
    }

    public function getId() {
        return $this->id;
    }

    public function setForm($param) {
        $this->id_form = $param;
    }

    public function getForm() {
        return $this->id_form;
    }

    public function setNom($param) {
        $this->nom = $param;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setDuree($param) {
        $this->duree = $param;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function __toString() {
        return "Formulaire[" . $this->id . "," . $this->id_form . "," . $this->nom . "," . $this->duree . "]";
    }

    public function loadFromArray($tab) {
        $this->id = $tab["id"];
        $this->id_form = $tab["id_form"];
        $this->nom = $tab["nom"];
        $this->duree = $tab["duree"];
    }

}
