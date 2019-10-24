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
class FormulaireDAO {

    public static function find($id) {
        $cnx = Connection::getInstance();
        $pstmt = $cnx->prepare("SELECT * FROM formulaire WHERE id= :x");
        $pstmt->execute(array(':x' => $id));

        $result = $pstmt->fetch(PDO::FETCH_OBJ);

        if ($result) {
            $etu = new Etudiant($result->id_etu, $result->nom, $result->prenom, $result->mdp, $result->id_groupe);
            $etu->setNote($result->note);
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

}
