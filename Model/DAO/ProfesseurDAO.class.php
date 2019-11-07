<?php
require_once __DIR__ . '/connexion.php';
require_once dirname(__DIR__) . "\Class\Professeur.php";

class ProfesseurDAO
{

    public static function ajouter($nom, $prenom, $courriel, $motdepasse)
    {
        $db = Connection::getInstance();
        $hash = password_hash($motdepasse, PASSWORD_DEFAULT);
        $pstmt = $db->prepare("INSERT INTO professeur (courriel, nom, prenom, motdepasse) VALUES (?, ?, ?, ?)");
        $pstmt->execute(array($courriel, $nom, $prenom, $hash));
    }

    public static function verifierCourriel($courriel)
    {
        $db = Connection::getInstance();

        $pstmt = $db->prepare("SELECT courriel FROM professeur WHERE courriel = :x");
        $pstmt->execute(array(':x' => $courriel));
        $result = $pstmt->fetch(PDO::FETCH_OBJ);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public static function connecter($courriel)
    {
        $cnx = Connection::getInstance();
        $pstmt = $cnx->prepare("SELECT * FROM professeur WHERE courriel = :x");
        $pstmt->execute(array(':x' => $courriel));

        $result = $pstmt->fetch(PDO::FETCH_OBJ);

        if ($result) {
            $prof = new Professeur($result->courriel, $result->nom, $result->prenom, $result->motdepasse);
            //var_dump($prof);
            return $prof;
        }
    }
	public function update($x){
        $request = "UPDATE professeur SET nom = '".$x->getNom()."', prenom = '".$x->getPrenom().
                "', mdp = '".$x->getMotDePasse()." WHERE courriel = ".$x->getCourriel();
        try{
            $cnx = Connection::getInstance();
            return $cnx->exec($request);
            
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
