    <?php
    $invalide = false;
    if (isset($_SESSION['type_utilisateur']) && $_SESSION['type_utilisateur'] == "professeur") {
        $invalide = true;
    } ?>

    <div class="container profile profile-view" id="profile">
        <form>
            <div class="form-row profile-row">
                <div class="col-md-12 offset-md-0">
                    <h1 class="my-4">Profil</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Prénom</label><input class="form-control" type="text" name="prenom_etu" disabled="" placeholder="<?= $data->getPrenom(); ?>"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Nom</label><input class="form-control" type="text" name="nom_etu" disabled="" placeholder="<?= $data->getNom(); ?>"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Numéro d'admission</label><input class="form-control" type="text" autocomplete="off" required="" name="da" disabled="" placeholder="<?= $data->getID(); ?>"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Taille</label><input class="form-control" type="text" name="taille_etu" autocomplete="off" <?php if ($invalide) echo 'disabled=""' ?>></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Âge</label><input class="form-control" type="text" name="age_etu" autocomplete="off" <?php if ($invalide) echo 'disabled=""' ?>></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Poids</label><input class="form-control" type="text" name="poids_etu" autocomplete="off" <?php if ($invalide) echo 'disabled=""' ?>></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>IMC</label><input class="form-control" type="text" name="imc_etu" autocomplete="off" <?php if ($invalide) echo 'disabled=""' ?>></div>
                        </div>
                    </div>
                    <hr>
                    <?php if (isset($_SESSION['type_utilisateur']) && $_SESSION['type_utilisateur'] == "etudiant") { ?>
                        <div class="form-row">
                            <div class="col-md-12 content-right"><button class="btn btn-primary form-btn mr-3" type="submit">Sauvegarder</button><button class="btn btn-danger form-btn" type="reset">Annuler</button></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>