<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Envoyer
 *
 * @author estes
 */
class EnvoyerCorrectionController implements IAction {

    //put your code here
    public function execute() {
        if (!isset($_REQUEST['id'])) {
            return new Page('profilprof', "Accueil", null, null);
            
        }
        $f = FormulaireService::trouver($_REQUEST['id']);
        if ($f == null) {
            return new Page('profilprof', "Accueil", null, null);
        }
        $f->setNote($_REQUEST['note']);
        $f->setCom($_REQUEST['commentaire']);
        FormulaireService::modifier($f);
        return new Page('correction_formulaire', 'Formulaire', $f, null);
    }
}
