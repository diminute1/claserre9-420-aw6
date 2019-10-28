<?php
require_once './Model/DAO/FormulaireDAO.php';
require_once './Model/Class/Formulaire.php';
$form = new Formulaire();
$form->setBpm($_REQUEST['bpm']);
$form->setSport($_REQUEST['sport']);
$form->setType($_REQUEST['type']);
$form->setFrequence($_REQUEST['fre']);
$form->setId($_REQUEST['id']);

echo FormulaireDAO::update($form);
