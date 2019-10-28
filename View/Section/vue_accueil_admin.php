<?php
//require_once './Model/DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../../style/css/style.css">
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>

<?php
include"header.php";
?>
<img src="../../style/images/rosemont.jpg" style="height:200px; display: block; margin-left: auto; margin-right: auto; top: 0%;">
<div id="ctn_acc_admin">
	<h1>Bienvenue <?php echo(ISSET ($_SESSION["connected"]))? $_SESSION["connected"]: ("Professeur") ?></h1>
	<h2>Sélectionnez une session :</h2>
	<hr/>
	<select>
		<option value="">Automne 2019</option>
		<option value="">Hiver 2019</option>
		<option value="">Automne 2018</option>
	</select>
	<hr/>
	<h2>Sélectionnez un groupe :</h2>
	<select>
		<option value="">Groupe 1</option>
		<option value="">Groupe Mardi</option>
		<option value="">Groupe Cincinnati</option>
	</select>
	<div/>
	<button id="btn_connect" type="submit" style="max-width: 300px; margin-top:1%;">Voir ce groupe</button>
</div>

</body>
</html>
