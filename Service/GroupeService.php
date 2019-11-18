<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GroupeService
 *
 * @author estes
 */
class GroupeService {

    //put your code
    public static function supprimer($id) {
        return GroupeDAO::deleteGroupe($id);
    }

    public static function creer($groupe) {
        if ($groupe instanceof Groupe) {
            return GroupeDAO::createGroupe($groupe);
        } else {
            return null;
        }
    }
    
    public static function trouverParProf($id){
        return GroupeDAO::find($id);
    }

}
