<?php

require_once './Modele/DAO/ExoTempDAO.php';
$exo = ExoTempDAO::findAll();

foreach ($exo as $e) {
    echo'<div id="' . $e->getId() . '">';
    echo"<hr style='margin-left: 20%;margin-right: 20%'>";
    echo '<input type = "text" id="n' . $e->getId() . '" value="' . $e->getNom() . '" name="name"  onchange="update(\'' . $e->getId() . '\')"> '
    . '<input type = "number" onchange="update(\'' . $e->getId() . '\')" id="d' . $e->getId() . '" value="' . $e->getDuree() . '" style = "width: 3em;"> minutes'
    . ' <span  class="btn fa fa-trash" style="cursor:pointer;color:red;" onclick="delete_exo(\'' . $e->getId() . '\')"></span>'
            . '</div>';
}
