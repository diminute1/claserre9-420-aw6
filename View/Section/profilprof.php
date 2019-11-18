<!--<p>Je suis connecté</p>-->
<?php //require_once './Model/DAO/groupeDAO.php'; 
?>

<div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#creergroupe">
        Creer un groupe d'étudiants
    </button>
</div>
<div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifiermdp">
        Modifier le mot de passe
    </button>
</div>


<div class="list-group container">
    <ul>
        <?php
        $i = 0;
        while ($data->next()) {
            $grp = $data->get($i);
            $p = $data->current(); ?>


            <li class="list-group-item d-flex justify-content-between align-items-center py-5">
                <h3><i class="fas fa-users"></i>&nbsp; <?= $p->get_nom_groupe(); ?> (<?= $p->get_session() . " " . $p->get_annee(); ?>)</h3>
                <span>
                    <a href="?action=affichergroupe&id=<?= $p->get_id_groupe() ?>" class="btn btn-success text-white" role="button"><i class="fas fa-eye"></i></a>
                    <a href="?action=supprimergroupe&id=<?= $p->get_id_groupe() ?>" class="btn btn-danger text-white" role="button"><i class="fas fa-trash"></i></a>
                </span>
            </li>

        <?php } ?>
    </ul>
</div>
