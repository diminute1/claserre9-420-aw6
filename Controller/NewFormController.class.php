<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewFormController
 *
 * @author estes
 */
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Modele/DAO/FormulaireDAO.php';
require_once './Modele/Formulaire.php';

class NewFormController implements IAction{
    //put your code here
    public function execute() {
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['connected']))return new Page('connected', "Accueil", null, null);
        $new=new Formulaire();
        $new->setIdEtu($_SESSION['connected']);
        $new->setId(uniqid());
        $new->setSport('Nouveau');
        FormulaireDAO::Create($new);
        $f= FormulaireDAO::find($new->getId());
        if ($f == null) return new Page('connected', "Accueil", null, null);
        return new Page('form_etu', 'Formulaire', $f, null);
    }
    

}