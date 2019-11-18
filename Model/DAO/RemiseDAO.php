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

 class RemiseDAO
 {
   public static function create(Remise $x){
     $request = "INSERT INTO remise (id_groupe,date_remise) VALUES ('". $x->getGroupe() .  "','"  . $x->getDate() . "');";
     try {
         $cnx = Connection::getInstance();
         return $cnx->exec($request);
     } catch (Exception $ex) {
         throw $ex;
     }
   }

   public static function findById(string $id){
     return false;
   }

   public static function findByGroupe(String $id_groupe){
     try {
         $liste = array();

         $requete = 'SELECT * FROM remise WHERE id_groupe=' . $id_groupe;
         $cnx = Connection::getInstance();

         $res = $cnx->query($requete);
         foreach ($res as $row) {
             $e = new Remise();
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

   public static function delete(string $id){
     return false;
   }

   public static function update(REmise $remise){
     return false;
   }

 }
