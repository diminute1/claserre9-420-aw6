<?php

require_once './Model/DAO/FormulaireDAO.php';
require_once './Model/Class/Formulaire.php';
require_once './Model/Class/Etudiant.php';
?>
<a href="?action=afficherGroupe&id=<?=$data->getIdGroupe()?>" class="btn btn-primary">retour</a>
<?php
$list = FormulaireDAO::findByEtu($_REQUEST['id']);
echo '<table class="table">';
foreach ($list as $form) {
    echo '<tr>';
    echo '<td><a href="?action=corrigerFormulaire&id=' . $form->getId() . '" class="btn btn-block">' . $form->getSport() . '</a></td>';
    echo '</tr>';
}
echo '</table>';
