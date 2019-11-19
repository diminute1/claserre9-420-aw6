<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RemiseDAO
 *
 * @author estes
 */
 require_once './Model/DAO/connexion.php';
 require_once './Model/Class/Remise.php';

 class RemiseFormulaireDAO
 {
   public static function create(RemiseFormulaire $x){
     $request = "INSERT INTO remise_formulaire (id_etu,id_remise) VALUES (". $x->getEtu() .  ",'"  . $x->getRemise() . "');";
     try {
         $cnx = Connection::getInstance();
         return $cnx->exec($request);
     } catch (Exception $ex) {
         throw $ex;
     }
   }

   public static function findByRemise(String $id_remise){
     try {
         $liste = array();

         $requete = 'SELECT * FROM remise_formulaire WHERE id_remise="' . $id_remise.'"';
         $cnx = Connection::getInstance();

         $res = $cnx->query($requete);
         if($res==null){
           return $liste;
         }
         foreach ($res as $row) {
             $e = new RemiseFormulaire();
             $e->loadFromArray($row);
             array_push($liste, $e);
         }
         $res->closeCursor();
         $cnx = null;
         return $liste;
     } catch (Exception $ex) {
         print "Error : " . $ex->getMessage() . "<br/>";
         return $liste;
     }
   }
 }
