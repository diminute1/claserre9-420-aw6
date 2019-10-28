<?php
require_once './Modele/DAO/ExoTempDAO.php';
require_once './Modele/ExerciceTemps.php';
ExoTempDAO::delete($_REQUEST['id']);


