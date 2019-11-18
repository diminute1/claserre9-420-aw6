<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AfficherActiviteController
 *
 * @author estes
 */
class AfficherActiviteController implements IAction {
    //put your code here
    public function execute() {
        $etu= EtudiantService::trouver($_REQUEST['id']);
        return new Page('liste_activites','Activites',$etu,null);
    }

}
