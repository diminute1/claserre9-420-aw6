<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewlistController
 *
 * @author estes
 */
class NewlistController implements IAction {

    public function execute() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_FILES["file"])) {
            return new Page('connected', "Accueil", null, null);
        }
        /*$nom_file = $_FILES["fichier"];
        $file = fopen($nom_file,"r");
        $_FILES["test"]= fgets($file);*/
        return new Page("liste_etu", "Groupe", null, null);
    }

}
