<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getFormulaire
 *
 * @author estes
 */
require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Model/DAO/FormulaireDAO.php';
require_once './Model/Class/Formulaire.php';

class GetFormulaireController  implements IAction
{
    //put your code here
    public function execute()
    {
        if (!isset($_REQUEST['id'])) {
            return new Page('connected', "Accueil", null, null);;
        }
        $f = FormulaireDAO::find($_REQUEST['id']);
        if ($f == null) return new Page('connected', "Accueil", null, null);
        return new Page('form_etu', 'Formulaire', $f, null);
    }
}
