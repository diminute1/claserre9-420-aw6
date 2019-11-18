<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EtudiantService
 *
 * @author estes
 */
class EtudiantService {

    //put your code here
    public static function creer($etudiant) {
        if ($etudiant instanceof Etudiant) {
            return EtudiantDAO::Create($etudiant);
        } else {
            return null;
        }
    }
    public static function TrouverParGroupe($id){
        return EtudiantDAO::findByGroupe($id);
    }
    public static function supprimer($id){
        return EtudiantDAO::delete($id);
    }
    public static function trouver($id){
        return EtudiantDAO::find($id);
    }
    
    

}
