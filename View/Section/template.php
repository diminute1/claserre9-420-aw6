<!DOCTYPE html>
<html>

<head>
    <title><?= $titre; ?></title>
    <?php include "CDN.php" ?>
</head>

<body>
    <?php if (isset($_REQUEST["messageConnexion"])) { ?>
        <div class="alert alert-<?php if (isset($_REQUEST["theme"])) echo $_REQUEST["theme"] ?> w-50 my-2 mx-auto" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><?= $_REQUEST["messageConnexion"] ?></strong>
        </div>
    <?php } ?>

    <?php include 'header.php' ?>

    <?php echo $contenu; ?>

    <br>
    <br>
    <br>
    <?php include "modal_ajout_groupe.php"
    ?>
    <?php //include 'footer.php' 
    ?>
    <?php include "script.php" ?>
</body>


</html>