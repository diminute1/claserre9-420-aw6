<!DOCTYPE html>
<html>

<head>
    <title><?= $titre; ?></title>
    <?php include "CDN.php" ?>
</head>

<body>
    <?php if (isset($_REQUEST["messageConnexion"])) { ?>
        <div class="alert alert-<?php if(isset($_REQUEST["theme"])) echo $_REQUEST["theme"]?> w-50 my-2 mx-auto" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><?=$_REQUEST["messageConnexion"]?></strong>
        </div>
    <?php } ?>


    <?php echo $contenu; ?>
<script src = "./style/JS/ourscript.js"></script>
</body>

</html>