<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EtudiantDAO
 *
 * @author User
 */
require_once './DAO/connexion.php';
require_once 'Etudiant.php';

class EtudiantDAO {

    //put your code here
    public static function Create($x) {
        $request = "INSERT INTO etudiant (id_etu,nom,prenom,mdp) VALUES (" . $x->getId() . ",'" . $x->getNom() . "','" . $x->getPrenom() . "','" . $x->getMdp() . "');";
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public static function findAll() {
        try {
            $liste = array();

            $requete = 'SELECT * FROM etudiant';
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

    public static function find($id) {
        $cnx = Connection::getInstance();
        $pstmt = $cnx->prepare("SELECT * FROM etudiant WHERE id_etu = :x");
        $pstmt->execute(array(':x' => $id));
        
        $result = $pstmt->fetch(PDO::FETCH_OBJ);
        
        if($result){
            $etu=new Etudiant($result->id_etu,$result->nom,$result->prenom,$result->mdp);
            return $etu;
        }
        
        
        
        
//        $request = "SELECT * FROM etudiant WHERE id = '" . $id . "'";
//        try {
//            $cnx = Connection::getInstance();
//            $res = $cnx->query($request);
//            $etu=new Etudiant();
//            echo $res;
////$etu->setId($param->id);
//            //$etu->loadFromArray($res);
//            return $etu;
//            
//        } catch (Exception $ex) {
//            throw $ex;
//            return null;
//        }
    }

    public function delete($x) {
        $request = "DELETE FROM etudiant WHERE id = '" . $x->getId() . "'";
        try {
            $cnx = Connection::getInstance();
            return $cnx->exerc($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

}
