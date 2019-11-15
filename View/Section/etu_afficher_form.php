<?php

require_once './Model/DAO/FormulaireDAO.php';
require_once './Model/Class/Formulaire.php';


$list = FormulaireDAO::findByEtu($_SESSION['connected']);
?>
<div class="container">
<?php
echo '<table class="table">';
echo '<th style="text-align:center">Nom du projet</th>';
echo '<th></th>';
foreach ($list as $form) {
?>

    <tr>
    <td><a href="?action=getFormulaire&id=<?=$form->getId()?>" class="btn btn-block"><?=$form->getSport()?></a></td>
	<td align='right'><a class='btn btn-danger fa fa-trash' href='?action=deleteFormulaire&form=<?=$form->getId()?>'></a></td>
    </tr>
<?php }
echo '<tr>';
echo '<td><a href="?action=newForm" class="btn btn-block"><span class="fa fa-plus"></span> </a></td>';
echo '</tr>';
echo '</table>';
?>
</div>