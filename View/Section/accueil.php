<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="./style/css/style.css">
<head>
  <title><?=$titre?></title>
  <?php include "CDN.php" ?>
</head>
<body id="bodylogin">
	<form id="form-signin">
		<div id="form-signin">
			<h1>Connexion</h1>
			<hr/>
			<input type="text" id="utilisateur" class="form-control" placeholder="Numéro de DA" required autofocus>
			<input type="password" id="password" class="form-control" placeholder="Mot de passe" required autofocus>
			<hr/>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
		</div>
	</form>
	<a href="?action=inscrire">Se déconnecter</a>
</div>

</body>
</html>