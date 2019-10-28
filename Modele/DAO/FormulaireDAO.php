<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormulaireDAO
 *
 * @author estes
 */
require_once './Modele/DAO/connexion.php';
require_once './Modele/Formulaire.php';
class FormulaireDAO {

    public static function find($id) {
        $cnx = Connection::getInstance();
        $pstmt = $cnx->prepare("SELECT * FROM formulaire WHERE id_form= :x");
        $pstmt->execute(array(':x' => $id));

        $result = $pstmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $etu = new Formulaire();
            $etu->loadFromArray($result);
            return $etu;
        }
    }
    
    public static function findAll(){
        try {
            $liste = array();

            $requete = 'SELECT * FROM formulaire';
            $cnx = Connection::getInstance();

            $res = $cnx->query($requete);
            foreach ($res as $row) {
                $e = new Etudiant();
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
    
    public static function update($x){
        $request = "UPDATE formulaire SET sport = '".$x->getSport()."', type = '".$x->getType().
                "', bpm = ".$x->getBpm().", note = ".$x->getNote().", frequence = ".$x->getFrequence()."".
                    " WHERE id_form = '".$x->getId()."'";
      
        try{
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
            
        } catch (Exception $ex) {
            throw $ex;
        }
    }

}
