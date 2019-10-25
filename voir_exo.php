<?php

require_once './Modele/DAO/ExoTempDAO.php';
$exo = ExoTempDAO::findAll();

foreach ($exo as $e) {
    echo"<hr style='margin-left: 20%;margin-right: 20%'>";
    echo'<div id="' . $e->getId() . '" ><input type = "text" id="n' . $e->getId() . '" value="'.$e->getNom().'" name="name"  onchange="update(\'' . $e->getId() . '\')"> <input type = "number" onchange="update(\'' . $e->getId() . '\')" id="d' . $e->getId() . '" value="' . $e->getDuree() . '" style = "width: 3em;"> minutes</div>';
}
