<?php
require_once './DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <p>
  <h5>Test de connexion avec la base de données</h5>
  <br><br>
  <p>HOST NAME : <?= IDAO::host ?></p>
  <p>DATABASE NAME : <?= IDAO::dbname ?> </p>
  <p>USERNAME : <?= IDAO::user ?> </p>
  <p>USER PASSWORD: <?= IDAO::password ?> </p>
  
  <?php Connection::getInstance();?>
  </p>
</div>

</body>
</html>