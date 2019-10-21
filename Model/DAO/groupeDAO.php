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



    public static function findGroupe($groupe)
    {
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("SELECT * FROM groupe WHERE id_prof = :x"); //requête paramétrée par un paramètre x.
            $pstmt->execute(array(':x' => $groupe));

            $result = $pstmt->fetch(PDO::FETCH_OBJ);

            if ($result) {
                $f = new Groupe();
                $f->loadFromObject($result);
                $pstmt->closeCursor();
                $pstmt = null;

                return $f;
            }
            $pstmt->closeCursor();
            $pstmt = null;
        } catch (PDOException $ex) { }
        return null;
    }

    public function deleteGroupe($x)
    {
        $request = "DELETE FROM `groupe` WHERE `groupe`.`id_groupe`=" . $x;
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
