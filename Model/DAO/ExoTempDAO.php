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
require_once './Model/DAO/connexion.php';
require_once './Model/Class/ExerciceTemps.php';

class ExoTempDAO
{
    public static function Create($x)
    {
        $request = "INSERT INTO activite_temps (id,nom,id_form,duree) VALUES ('"
            . $x->getId() .  "','" . $x->getNom() . "','" . $x->getForm() . "'," . $x->getDuree() . ");";
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public static function findByProjet($id)
    {
        try {
            $liste = array();

            $requete = 'SELECT * FROM activite_temps WHERE id_form=\'' . $id . "'";
            $cnx = Connection::getInstance();

            $res = $cnx->query($requete);
            foreach ($res as $row) {
                $e = new ExerciceTemps();
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

    public static function findAll()
    {
        try {
            $liste = array();

            $requete = 'SELECT * FROM activite_temps';
            $cnx = Connection::getInstance();

            $res = $cnx->query($requete);
            foreach ($res as $row) {
                $e = new ExerciceTemps();
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

    public static function update($x)
    {
        $request = "UPDATE activite_temps SET nom = '" . $x->getNom() . "', duree = " . $x->getDuree() .
            " WHERE id = '" . $x->getId() . "'";
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }



    public static function delete($x)
    {
        $request = "DELETE FROM activite_temps WHERE id = '" . $x . "'";

        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
