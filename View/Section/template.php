<!DOCTYPE html>
<html>

<head>
    <title><?= $titre; ?></title>
    <?php include "CDN.php" ?>
</head>


<body 
<?=(!isset($_REQUEST['action']) ? "style = 'background-image: url(./style/img/gymrosemont.jpg) ; background-size: auto; background-repeat: no-repeat; background-position: center center; '" : '') ?>
<?=(isset($_REQUEST['action']) && $_REQUEST['action']=='portailprof' ? "style = 'background-color : #f0f0f5'" : '') ?>
<?=(isset($_REQUEST['action']) && $_REQUEST['action']=='portailetu' ? "style = 'background-color : #f0f0f5'" : '') ?>
<?=(isset($_REQUEST['action']) && $_REQUEST['action']=='apropos' ? "style = 'background-color : #f0f0f5'" : '') ?>
<?=(isset($_REQUEST['action']) && $_REQUEST['action']=='connexionprof' ? "style = 'background-color : #f0f0f5'" : '') ?>
<?=(isset($_REQUEST['action']) && $_REQUEST['action']=='deconnexion' ? "style = 'background-image: url(./style/img/gymrosemont.jpg) ; background-size: auto; background-repeat: no-repeat; background-position: center center; '" : '') ?>
<?=(isset($_REQUEST['action']) && $_REQUEST['action']=='accueil' ? "style = 'background-image: url(./style/img/gymrosemont.jpg) ; background-size: auto; background-repeat: no-repeat; background-position: center center; '" : '') ?>

>
    <?php
    include "navbar.php";
    ?>


    <?php include "notification.php"
    ?>


    <?php echo $contenu; ?>

    <br>
    <br>
    <br>
    <?php include "modal_ajout_groupe.php"
    ?>
    <?php include "modal_ajout_etudiant.php"
    ?>
    <?php include "modal_import_etudiant.php"
    ?>
    <?php //include 'footer.php' 
    ?>
    <?php include "script.php" ?>
</body>


</html>