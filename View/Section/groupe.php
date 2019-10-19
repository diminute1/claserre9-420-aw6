 <!--<h2>Groupes</h2>
 <hr />
 <table id=form-signin>
   <?php
    $liste = GroupeDao::findAll();
    foreach ($liste as $value) {
      if ($value->get_id_prof() == $_SESSION['connected']) {
        ?>
       <tr>
         <td><?= $value ?></td>
         <td>
           <form action="?action=supprimergroupe" method="post">
             <input type="hidden" value=<?= $value->get_id_groupe() ?> name="id">
             <button class="btn btn-primary btn-block" type="submit">Supprimer</button>
           </form>
         </td>
       </tr>
   <?php
      }
    }
    ?>
 </table>
 <form id="form-signin" method="post" action="?action=ajoutergroupe">
   <h2>Création groupe</h2>
   <hr />

   <label>Nom du groupe</label>
   <input name="NOM" type="text" class="form-control" required="required" placeholder="Écrivez le nom du groupe">

   <label>Session</label>
   <input name="SESSION" type="text" class="form-control" required="required" placeholder="Session">
   <br />
   <button type="submit" class="btn btn-primary btn-block">Créer</button>
   <br />
   <button type="submit" class="btn btn-secondary">Annuler</button>
   <hr />
 </form>