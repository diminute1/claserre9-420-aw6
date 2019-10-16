<?php
$liste=EtudiantDAO::findAll();
foreach($liste as $etu){
    echo $etu;
    echo "<br/>";
}
?>
