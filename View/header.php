<?php
//require_once './Model/DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../style/css/style.css">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/0e0877556c.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="header">
		<ul>
		  <li><a>Département d'éducation physique</a></li>
		  <li style="float:right"><a href="#about"><?php echo(ISSET ($_SESSION["connected"]))? $_SESSION["connected"]: ("Mon compte") ?> <i class="fas fa-user"></i></a></li>
		</ul>
	</div>
</body>
</html>

