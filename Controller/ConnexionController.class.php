<?php

require_once('./Controller/Action.interface.php');
require_once('./View/page.class.php');
require_once './Modele/EtudiantDAO.php';

class ConnexionController implements IAction {

    public function execute() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if ($this->invalide()) {
            return new Page('accueil', "Accueil", null, null);
        }
        if (isset($_POST["da"]) && isset($_POST["mdp"])) {
            $etu = EtudiantDAO::find($_POST['da']);
            if ($etu != null && password_hash($_POST['mdp'], PASSWORD_DEFAULT) == $etu->getMdp()) {
                $_SESSION['connected'] = $etu->getId();
            }else{
                
            }
        }
        return new Page('connected', "Accueil", null, null);
    }

    private function invalide() {
        $da = $_POST['da'];
        $number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $length = strlen($da);
        if ($length != 7) {
            $_REQUEST['message']['da'] = "votre numéro de DA est composé de 7 chiffres";
            return true;
        }
        return false;
    }

}
