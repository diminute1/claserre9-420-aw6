<!--<form id="form-signin">
	<div id="form-signin">
		<h1>Connexion</h1>
		<hr />
		<input type="text" id="utilisateur" class="form-control" placeholder="Numéro de DA" required autofocus>
		<input type="password" id="password" class="form-control" placeholder="Mot de passe" required autofocus>
		<hr />
		<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
	</div>
</form>-->

<?php
function getRandomImage($dir_path = NULL){
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            return '<img style="width:538px;height:400px;" src="'.$dir_path."/".$filename.'" alt="'.$filename.'">';
        } else {
            return "The directory is empty!";
        }
    } else {
        return "Please enter valid path to image directory!";
    }
}
?>




<div class="container">
	<div class="card-deck">
		<div class="card">
			<a id="link" href="?action=portailprof">
				<?php echo getRandomImage("./Style/images/images_rdm");?>
				<div class="card-body">
					<h5 class="card-title">Professeur</h5>
					<p class="card-text">Si vous êtes professeur du cours d'education physique et autonomie</p>
				</div>
			</a>
		</div>
		<div class="card">
			<a id="link" href="?action=portailetu">
				<?php echo getRandomImage("./Style/images/images_rdm");?>
				<div class="card-body">
					<h5 class="card-title">Étudiants</h5>
					<p class="card-text">Si vous êtes inscrits au cours d'éducation physique et autonomie</p>
				</div>
			</a>
		</div>
	</div>
</div>