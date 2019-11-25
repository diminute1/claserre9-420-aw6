<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormulaireService
 *
 * @author estes
 */
class FormulaireService {
    //put your code here
    public static function creer($formulaire){
        return FormulaireDAO::Create($formulaire);
    }
    public static function trouver($id){
        return FormulaireDAO::find($id);
    }
    public static function trouverParEtudiant($id){
        return FormulaireDAO::findByEtu($id);
    }
    public static function modifier($formulaire){
        return FormulaireDAO::update($formulaire);
    }
    public static function remis($remise,$etu){
      $forms=FormulaireService::trouverParEtudiant($etu->getId());
      foreach($forms as $form){
        if($form->getRemise()==$remise->getId()){
          return true;
        }
      }
      return false;
    }

}
