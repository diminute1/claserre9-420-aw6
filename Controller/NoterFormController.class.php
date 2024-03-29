<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Service/FormulaireService.php';
require_once './Model/Class/Formulaire.php';

class NoterFormController  implements IAction
{
    //put your code here
    public function execute()
    {
        if (!isset($_REQUEST['id'])) {
            return new Page('connected', "Accueil", null, null);;
        }
        $f = FormulaireService::trouver($_REQUEST['id']);
        if ($f == null) return new Page('connected', "Accueil", null, null);
        return new Page('prof_afficher_form', 'Formulaire', $f, null);
    }
}

