<?php
session_start();
require_once './Controller/Routeur.class.php';

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

if ($action instanceof RequirePRGAction) {
    header("Location : ?action=" . $vue);
} else {
    echo $vue->genererContenu();
}
