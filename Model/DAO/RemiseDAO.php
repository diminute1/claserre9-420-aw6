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
     $request = "INSERT INTO remise (id_groupe,date_remise,id) VALUES ('". $x->getGroupe() .  "','"  . $x->getDate() . "','"  . $x->getId() . "');";
     try {
         $cnx = Connection::getInstance();
         if($cnx->exec($request)){
           return $x;
         }

     } catch (Exception $ex) {
         throw $ex;
     }
   }

   public static function findById(string $id){
     try {
       $retour=null;
         $cnx = Connection::getInstance();
         $pstmt = $cnx->prepare('SELECT * FROM remise WHERE id=:x');
         $pstmt->execute(array(':x' => $id));

         $result = $pstmt->fetch(PDO::FETCH_ASSOC);
         if($result){
             $retour = new Remise();
             $retour->loadFromArray($result);
             return $retour;
         }
         $cnx = null;
         return $retour;
     } catch (Exception $ex) {
         print "Error : " . $ex->getMessage() . "<br/>";
         return $retour;
     }
   }

   public static function findByGroupe(String $id_groupe){
     try {
         $liste = array();

         $requete = 'SELECT * FROM remise WHERE id_groupe=' . $id_groupe;
         $cnx = Connection::getInstance();

         $res = $cnx->query($requete);
         if($res==null){
           return $liste;
         }
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
