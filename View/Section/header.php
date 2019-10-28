<?php
//require_once './Model/DAO/connexion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../../style/css/style_header.css">
<head>
  <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/0e0877556c.js" crossorigin="anonymous"></script>
</head>
<body>
<button id="home_button"><i class="fas fa-home"></i></button>

<div class="dropdown">
	<button onclick="showmenu()" class="dropbtn"><?php echo(ISSET ($_SESSION["connected"]))? $_SESSION["connected"]: ("Mon compte ") ?><i class="fas fa-user"></i></button>
	<div id="myDropdown" class="dropdown-content">
		<a href="#">Modifier compte</a>
		<a href="#">Déconnexion</a>
	</div>
</div> 
</body>
<script>
function showmenu() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>
</html>

