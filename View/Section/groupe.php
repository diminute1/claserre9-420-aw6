<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./style/css/style.css">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body id="bodylogin">
  <h2>Groupes</h2>
            <hr/>
  <table id=form-signin>
    <?php
    $liste=GroupeDao::findAll();
    foreach ($liste as $value) {
      ?>
      <tr>
        <td><?=$value?></td>
        <td>
          <form action="?action=supprimergroupe" method="post">
            <input type="hidden" value=<?=$value->get_id_groupe()?> name="id">
            <button class="btn btn-primary btn-block" type="submit">Supprimer</button>
          </form>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>
  <form id="form-signin" method="post" action="?action=ajoutergroupe">
            <h2>Création groupe</h2>
            <hr/>
                              
            <label>Nom du groupe</label>
            <input name="NOM"type="text" class="form-control" required="required" placeholder="Écrivez le nom du groupe">    
                  
            <label>Session</label>
            <input name="SESSION"type="text" class="form-control" required="required" placeholder="Session">
            <br/>    
            <button type="submit" class="btn btn-primary btn-block">Créer</button>
            <br/>
            <button type="submit" class="btn btn-secondary">Annuler</button>
            <hr/>
      </form>
      
</body>
</html>
