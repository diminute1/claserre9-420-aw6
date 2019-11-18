<?php
require_once 'connexion.php';
include_once './Model/Class/Groupe.php';
include_once './Model/Class/list.class.php';

class GroupeDAO
{

    public static function createGroupe($groupe)
    {

        $request = "INSERT INTO groupe (nom_groupe, id_prof, session, annee) VALUES ('" . $groupe->get_nom_groupe() . "','" . $groupe->get_id_prof() . "','" . $groupe->get_session() . "','" . $groupe->get_annee() . "');";
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public static function find($id_prof)
    {
        try {
            $listegroupe = new Liste();

            $requete = "SELECT * FROM groupe WHERE id_prof = '" . $id_prof . "'";
            $cnx = Connection::getInstance();

            $res = $cnx->query($requete);
            foreach ($res as $row) {
                $grp = new Groupe();
                $grp->loadFromArray($row);
                $listegroupe->add($grp);
            }
            $res->closeCursor();
            $cnx = null;
            return $listegroupe;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return $listegroupe;
        }
    }



    public function update($x){
        $request = "UPDATE groupe SET id_prof = '".$x->get_id_prof()."', session = '".$x->get_session().
            "', nom_groupe = '".$x->get_nom_groupe()."', annee = ".$x->get_annee()." ".
                "WHERE id_groupe = ".$x->get_id_groupe();
        try{
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex){
            throw $ex;
        }

    }

    public static function deleteGroupe($x)
    {
        $request = "DELETE FROM `groupe` WHERE `groupe`.`id_groupe`=" . $x;
        //$request = "DELETE FROM groupe WHERE id_groupe = '. $x->get_id_groupe(). "'";
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

}
