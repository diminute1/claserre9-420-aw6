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
</body>
<div id="ctn_acc_etud">
	<h1>Bienvenue <?php echo(ISSET ($_SESSION["connected"]))? $_SESSION["connected"]: ("Étudiant") ?></h1>
	<hr/>
	<button name="nouvel_entrainement" class="round_button"><i class="fa fa-futbol-o  fa-3x"></i></button>
	<div/>
	<label class="lbl_rd_button" for="nouvel_entrainement">Nouvel entrainement</label>
	<div/>
	<hr style="width:250px;"/>
	<button name="reutiliser_entrainement" class="round_button"><i class="fa fa-repeat fa-3x"></i></button>
	<div/>
	<label class="lbl_rd_button" for="reutiliser_entrainement">Réutiliser un entrainement</label>
</div>
</html>