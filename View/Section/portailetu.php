<div class="container loginetudiant">
	<div class="form-container shadow-lg p-3 mb-5 bg-white rounded">
		<form method="post" action="?action=connexionetu">
			<h2 class="text-center"><img src="./style/img/rosemont.jpg" width="150px"><br></h2>
			<div class="form-group"><input class="form-control form-control-lg" type="text" placeholder="Numéro d'admission" name="da" pattern="[0-9]{7}" title="Entrer le numéro d'admission" required=""></div>
			<div class="form-group"><input class="form-control form-control-lg" type="password" name="mdp" placeholder="Mot de passe" required=""></div>
			<div class="form-group">
				<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Se rappeler de moi</label></div>
			</div>
			<div class="form-group"><button class="btn btn-success btn-block" type="submit">Se connecter</button></div>
		</form>
	</div>
</div>