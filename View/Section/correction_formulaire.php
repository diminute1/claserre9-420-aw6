<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$form = $data;
?>
<br>
<h1 style="text-align: center">Correction du formulaire</h1>
<div class="container border rounded" style="text-align:center" style="margin-left: 20%;margin-right: 20%">

    <br>
    <h3><?= $form->getSport() ?></h3>
    <br>
    <br>
    Type de l'activité
    <br>
    <label><?= $form->getType() ?></label>
    <br>
    <div id="body_exo">
    </div>
    <hr style="margin-left: 30%;margin-right: 30%">
    <hr style="margin-left: 20%;margin-right: 20%">
    Fréquence cardiaque
    <br>
    <label><?= $form->getBPM() ?></label>
    <hr style="margin-left: 20%;margin-right: 20%">
    Nombre de fois pratiqué cette semaine
    <br>
    <label><?= $form->getFrequence() ?></label>
    <br />
    <form class="form" method="post">

        <hr />
        <input type="hidden" name="id" value="<?=$form->getId()?>">
        Note : <input name="note" type = number min="0" max="5">/5<br>
        <textarea name="commentaire" placeholder="Commentaire pour l'étudiant" rows="4" cols="50"></textarea>
        <br>
        <button class="btn btn-primary" type="submit">Corriger</button>
        <br><br>
        <hr>
    </form>