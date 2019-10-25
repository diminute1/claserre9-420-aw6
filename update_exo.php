<?php
require_once './Modele/DAO/ExoTempDAO.php';
require_once './Modele/ExerciceTemps.php';
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$duree = $_REQUEST['duree'];
$updated = new ExerciceTemps();
$updated->setId($id);
$updated->setDuree($duree);
$updated->setNom($name);
$res=ExoTempDAO::update($updated);
$e=$updated;
echo'<input type = "text" id="n' . $e->getId() . '" value="'.$e->getNom().'" name="name"  onchange="update(\'' . $e->getId() . '\')"> <input type = "number" onchange="update(\'' . $e->getId() . '\')" id="d' . $e->getId() . '" value="' . $e->getDuree() . '" style = "width: 3em;"> minutes';
