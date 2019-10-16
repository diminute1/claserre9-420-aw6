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
require_once './Model/DAO/connexion.php';
require_once './Model/Class/Etudiant.php';

class EtudiantDAO {

    //put your code here
    public static function Create($x) {
        $mdpHash = $x->getMdp();
        $hash = password_hash($mdpHash, PASSWORD_DEFAULT);
        $request = "INSERT INTO etudiant (id_etu,nom,prenom,mdp,note,id_groupe) VALUES (" . $x->getId() . 
                ",'" . $x->getNom() . "','" . $x->getPrenom() . 
                "','" . $hash . "'," .$x->getNote().",'".$x->getIdGroupe(). "');";
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
            $etu=new Etudiant($result->id_etu,$result->nom,$result->prenom,$result->mdp,$result->id_groupe);
            $etu->setNote($result->note);
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
    
    public function update($x){
        $request = "UPDATE etudiant SET nom = '".$x->getNom()."', prenom = '".$x->getPrenom().
                "', mdp = '".$x->getMdp()."', note = ".$x->getNote().", id_groupe = '".$x->getIdGroupe()."'".
                    "WHERE id = ".$x->getId();
        try{
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
            
        } catch (Exception $ex) {
            throw $ex;
        }
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
