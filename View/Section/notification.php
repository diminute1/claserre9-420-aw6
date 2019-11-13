<?php if (isset($_REQUEST["messageConnexion"])) { ?>
    <div class="alert alert-<?php if (isset($_REQUEST["theme"])) echo $_REQUEST["theme"] ?> my-2 mx-auto text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h6><?= $_REQUEST["messageConnexion"] ?></h6>
    </div>
<?php } ?>