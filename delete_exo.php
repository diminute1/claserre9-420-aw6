<?php
require_once './Model/DAO/ExoTempDAO.php';
require_once './Model/Class/ExerciceTemps.php';
ExoTempDAO::delete($_REQUEST['id']);
