<?php
session_start();
require_once './Controller/Router.class.php';
require_once './Controller/RequirePRGAction.interface.php';

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

if ($action instanceof RequirePRGAction) {
    header("Location: ?action=" . $vue);
}
