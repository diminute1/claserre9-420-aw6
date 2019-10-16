<?php
require_once 'connexion.php';
include_once('./Model/class/Groupe.php'); 

class GroupeDAO 
{
    
    
    public static function createGroupe($groupe){
          
        $request = "INSERT INTO groupe (NOM_GROUPE, SESSION, ID_PROF) VALUES ('" . $groupe->get_nom_groupe() . "','" . $groupe->get_session() .  "','" . $groupe->get_id_prof() . "');";
        echo "<script>alert('".$request."') </script>";
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

            $requete = 'SELECT * FROM groupe';
            $cnx = Connection::getInstance();

            $res = $cnx->query($requete);
            foreach ($res as $row) {
                $e = new Groupe();
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


    public static function findGroupe($groupe){
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("SELECT * FROM groupe WHERE NOM = :x");//requête paramétrée par un paramètre x.
            $pstmt->execute(array(':x' => $groupe));

            $result = $pstmt->fetch(PDO::FETCH_OBJ);

            if ($result)
            {
                    $f = new Groupe();
                    $f->loadFromObject($result);
                    $pstmt->closeCursor();
                    $pstmt = NULL;
                   
                    return $f;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
        }
        catch (PDOException $ex){
        }             
        return NULL;
    }

    

    public function deleteGroupe($x) {
        $request = "DELETE FROM `groupe` WHERE `groupe`.`id_groupe`=" . $x;
        try {
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
        } catch (Exception $ex) {
            throw $ex;
        }
    }


  
    }

