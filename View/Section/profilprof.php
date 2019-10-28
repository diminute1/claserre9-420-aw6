<!--<p>Je suis connecté</p>-->
<?php //require_once './Model/DAO/groupeDAO.php'; 
?>

<div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Creer un groupe d'étudiants
    </button>
</div>

<div class="d-flex justify-content-center">
    <div class="row">
        <div class="card-deck">
            <?php
            $i = 0;
            while ($data->next()) {
                $grp = $data->get($i);
                if ($grp == null) {
                    echo ('<p>Aucun groupe trouvé</p>');
                }
                $p = $data->current(); ?>
                <div class="col-sm-3">
                    <div class="card  w-100 mx-0 my-3">
                        <div class="card-body">
                            <h4 class="card-title"><?= $p->get_nom_groupe(); ?></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $p->get_session() . " " . $p->get_annee(); ?></h6>
                            <form class="d-inline-block" method="post" action="?action=afficherGroupe">
                                <input type="hidden" name="id_groupe" value="<?= $p->get_id_groupe() ?>" />
                                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></button>
                            </form>

                            <form class="d-inline-block" method="post" action="?action=effacerGroupe">
                                <input type="hidden" name="id_groupe" value="<?= $p->get_id_groupe() ?>" />
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<br>
<br>
<br>


<button onclick="logout()">Se déconnecter</button>
<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>