<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="./style/css/style.css">
<head>
  <title><?=$titre?></title>
  <?php include "CDN.php" ?>
</head>
<body id="bodylogin">
	    <div class="container" style="width: 100%;margin-top: auto;margin-bottom: auto;">
        <form class="text-center" method="post" style="margin-top: 10%;">
            <div class="form-group">
                <h2 style="width: 100%;font-size: auto;">Creation de compte</h2>
            </div>
            <div class="form-group"><input class="border rounded form-control" type="text" name="nom" required="" placeholder="Nom"></div>
            <div class="form-group"><input class="form-control" type="text" name="prenom" placeholder="Prénom" required=""></div>
            <div class="form-group"><input class="form-control" type="email" name="courriel" placeholder="Courriel" required=""></div>
            <div class="form-group"><input class="form-control" type="password" name="motdepasse" placeholder="Mot de passe"></div>
            <div class="form-group"><input class="form-control" type="password" name="c_motdepasse" placeholder="Confirmer le mot de passe"></div>
            <div class="form-group"><button class="btn btn-success btn-lg" type="submit" name="action" value="connexionprof">S'inscrire</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</div>

</body>
</html>