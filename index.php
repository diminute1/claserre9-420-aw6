<?php
require_once './Controller/Router.class.php'; 

$action = null;
$vue = null;
if (isset($_REQUEST["action"])) {
    $actionDemandee = $_REQUEST["action"];
    $controleur = Routeur::getAction($actionDemandee);
    $vue = $controleur->execute();
    /**/
} else {
    $action = Routeur::getAction("accueil");
    $vue = $action->execute();
}

echo $vue->genererContenu();
