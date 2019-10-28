<?php
//require_once './Model/DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../style/css/style.css">
<?php
function getRandomImage($dir_path = NULL){
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            return $dir_path."/".$filename;
        } else {
            return "The directory is empty!";
        }
    } else {
        return "Please enter valid path to image directory!";
    }
}
?>

<head>
	<title>Départ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12"><h1 style="text-align:center; margin-top:2%;">Bienvenue</h1><div/>
	<div/>
	<div class="row">
		<div class="col-md-6" style="margin-top: 10%;">
			<div class="card-deck flex-row flex-nowrap" style="width:100%; height: 100%;">
				<a href="connexionAdmin.php">
				<div class="card">
					<img src="<?php echo getRandomImage("../../style/images/images_rdm");?>" style="max-width:100%; width=100%;"></img>
					<div class="card-body">
						<h3 style="color: black;" class="card-sub align-middle">Connexion Administrateur</h3>
						<p style="color: black;" class="time-card">Connectez vous et gérez vos groupes et étudiants!</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-6" style="margin-top: 10%;">
			<div class="card-deck flex-row flex-nowrap" style="width:100%; height: 100%;">
				<a href="connexionEtu.php">
				<div class="card">
					<img src="<?php echo getRandomImage("../../style/images/images_rdm");?>" style="max-width:100%; width=100%;"></img>
					<div class="card-body">
						<h3 style="color: black;" class="card-sub align-middle">Connexion Étudiant</h3>
						<p style="color: black;"class="time-card">Connectez vous et enregistrer un entrainement hebdomadaire!</p>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>