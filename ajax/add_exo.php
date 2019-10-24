<?php

require_once './Modele/DAO/ExoTempDAO.php';
$exo = ExoTempDAO::findAll();

$i = 1;
foreach ($exo as $e) {
    echo"<hr style='margin-left: 20%;margin-right: 20%'>";
    echo'Exercice '.$i.' : <input type = "text"> <input type = "number" style = "width: 3em;"> minutes';
    $i++;
}
