<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExoTempDAO
 *
 * @author estes
 */
class ExoTempDAO {
    public static function Create($x) {
        $mdpHash = $x->getMdp();
        $hash = password_hash($mdpHash, PASSWORD_DEFAULT);
        $request = "INSERT INTO activite_temps (id_etu,nom,id_form,bom) VALUES (" . $x->getId() . 
                ",'" . $x->getNom() . "','" . $x->getForm() ."'," .$x->getBpm().");";
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

            $requete = 'SELECT * FROM activite_temps';
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
}
