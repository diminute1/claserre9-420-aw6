<?php
//require_once './Model/DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../style/css/style.css">
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include"header.php";
?>
	<img src="./style/img/rosemont.jpg" style="height:200px; display: block; margin:auto; margin-top: 2.5%;">
	<form id="head-signin">
		<h1>Département d'éducation physique</h1>
		<h2>Connexion</h2>
		<hr/>
		<div id="form-signinn" action="?action=connexionprof" method="post">
			<input class="form-control" type="email" name="moncourriel" placeholder="Courriel" required>
			<input class="form-control" type="password" name="monmotdepasse" placeholder="Mot de passe" required>
			<hr/>
			<button id="btn_connect" type="submit" >Se connecter</button>
		</div>
	</form>
	<hr style="max-width:33.333%;"/>
	<div class="accordion" style="max-width:50%; margin:auto;" id="accordionExample">
        <div class="card">
            <div class="card-header bg-success" id="headingOne">
                <a data-toggle="collapse" data-target="#collapseOne">
                    <h2 class="mb-0">
                        <h3 class="text-center text-white">Créer un compte</h3>
                    </h2>
                </a>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container w-75 mx-auto my-5 text-center">
                        <form action="?action=inscriptionprof" method="post">
                            <div class="form-group"><input class="border rounded form-control" type="text" name="nom" required="" placeholder="Nom" value="<?php if (isset($_REQUEST["nom"])) echo $_REQUEST["nom"] ?>"></div>
                            <div class="form-group"><input class="form-control" type="text" name="prenom" placeholder="Prénom" required="" value="<?php if (isset($_REQUEST["prenom"])) echo $_REQUEST["prenom"] ?>"></div>
                            <div class="form-group"><input class="form-control" type="email" name="courriel" placeholder="Courriel" required=""></div>
                            <div class="form-group"><input class="form-control" type="password" name="motdepasse" placeholder="Mot de passe" required=""></div>
                            <div class="form-group"><input class="form-control" type="password" name="c_motdepasse" placeholder="Confirmer le mot de passe" required=""></div>
                            <div class="form-group"><button class="btn btn-success btn-lg" type="submit">S'inscrire</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
