<?php

require_once './Model/DAO/FormulaireDAO.php';
require_once './Model/Class/Formulaire.php';


$list = FormulaireDAO::findByEtu($_SESSION['connected']);
echo '<table class="table">';
foreach ($list as $form) {
    echo '<tr>';
    echo '<td><a href="?action=getFormulaire&id=' . $form->getId() . '" class="btn btn-block">' . $form->getSport() . '</a></td>';
    echo '</tr>';
}

echo '</table>';
