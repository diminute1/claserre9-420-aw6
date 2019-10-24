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
</head>
<body>

<?php
include"header.php";
?>
<img src="../style/images/rosemont.jpg" style="height:200px; display: block; margin-left: auto; margin-right: auto; top: 0%;">
<div id="ctn_acc_admin">
	<h1>Votre groupe <?php //get parameter group ?></h1>
	<hr>
	<h2>Étudiants</h2>
	<hr>
	<table style="width:100%;">
	<?php
		//boucle pour afficher tous les etudiants du groupe
	?>
	<tr>
		<th>Nom étudiant</th>
		<th>Numéro Étudiant</th>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>1</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>2</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>3</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>4</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>5</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>6</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>7</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>8</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>9</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>10</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>11</td>
	</tr>
	<tr>
	<td>Étudiant</td>
	<td>12</td>
	</tr>
	
	</table>
	<hr>

</div>

</body>
</html>
