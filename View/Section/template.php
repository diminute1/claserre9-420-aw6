<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <!--L'ensemble des notifications pour assurer l'ergonomie-->
<?php
   


if (!isset($_REQUEST["action"])) {
    include "View/section/accueil.php";
}

echo $contenu;

?>
</body>

</html>