<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfService
 *
 * @author estes
 */
class ProfService {
    //put your code here
    public static function creerAvecObjet($professeur){
        $nom=$professeur->getNom();
        $prenom=$professeur->getPrenom();
        $courriel=$professeur->getCourriel();
        $motdepasse=$professeur->getMotDePasse();
        return ProfesseurDAO::ajouter($nom, $prenom, $courriel, $motdepasse);
    }
    public static function creer($nom,$prenom,$courriel,$motdepasse){
        return ProfesseurDAO::ajouter($nom, $prenom, $courriel, $motdepasse);
    }
    public static function connecter($courriel){
        return ProfesseurDAO::connecter($courriel);
    }
    public static function verifierCourriel($courriel){
        return ProfesseurDAO::verifierCourriel($courriel);
    }
}
