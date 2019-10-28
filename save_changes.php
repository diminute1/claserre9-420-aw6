<?php
require_once './Modele/DAO/FormulaireDAO.php';
require_once './Modele/Formulaire.php';
$form=new Formulaire();
$form->setBpm($_REQUEST['bpm']);
$form->setSport($_REQUEST['sport']);
$form->setType($_REQUEST['type']);
$form->setFrequence($_REQUEST['fre']);
$form->setId($_REQUEST['id']);

echo FormulaireDAO::update($form);



