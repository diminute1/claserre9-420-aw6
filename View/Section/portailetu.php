<?php
//require_once './Model/DAO/connexion.php'; 
?>



	<img src="./Style/img/rosemont.jpg" style="height:200px; display: block; margin:auto; margin-top: 2.5%;">
	<form id="head-signin" action="?action=connexionetu" method="post">
		<h1>Département d'éducation physique</h1>
		<h2>Connexion</h2>
		<hr/>
		<div id="form-signinn">
			<input type="text" name="da" class="form-control" placeholder="Numéro DA" required autofocus>
			<input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required autofocus>
			<hr/>
			<button id="btn_connect" type="submit" >Se connecter</button>
		</div>
	</form>


