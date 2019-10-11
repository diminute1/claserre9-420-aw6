<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="./style/css/style.css">
<head>
  <title><?=$titre?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body id="bodylogin">
<form id="form-signin">
      <div id="form-signin" method="post" action="ajouterGroupe">
            <h2>Création groupe</h2>
            <hr/>
                              
            <label>Nom du groupe</label>
            <input type="text" class="form-control" placeholder="Écrivez le nom du groupe">    
                  
            <label>Session</label>
            <input type="text" class="form-control" placeholder="Session">
            <br/>    
            <button type="submit" class="btn btn-primary btn-block">Créer</button>
            <br/>
            <button type="submit" class="btn btn-secondary">Annuler</button>
            <hr/>
      </div>
</form>
      
</body>
</html>
