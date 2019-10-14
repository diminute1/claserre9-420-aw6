<div class="container bs-example">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header bg-success" id="headingOne">
                <a data-toggle="collapse" data-target="#collapseOne">
                    <h2 class="mb-0">
                        <h3 class="text-center text-white">Créer un compte</h3>
                    </h2>
                </a>
            </div>


            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <!-- Formulaire d'inscription-->
                    <div class="container w-75 mx-auto my-5 text-center">
                        <form method="post">
                            <div class="form-group"><input class="border rounded form-control" type="hidden" ></div>
                            <div class="form-group"><input class="border rounded form-control" type="text" name="nom" required="" placeholder="Nom" value="<?php if (isset($_REQUEST["nom"])) echo $_REQUEST["nom"] ?>"></div>
                            <div class="form-group"><input class="form-control" type="text" name="prenom" placeholder="Prénom" required="" value="<?php if (isset($_REQUEST["prenom"])) echo $_REQUEST["prenom"] ?>"></div>
                            <div class="form-group"><input class="form-control" type="email" name="courriel" placeholder="Courriel" required=""></div>
                            <div class="form-group"><input class="form-control" type="password" name="motdepasse" placeholder="Mot de passe" required=""></div>
                            <div class="form-group"><input class="form-control" type="password" name="c_motdepasse" placeholder="Confirmer le mot de passe" required=""></div>
                            <div class="form-group"><button class="btn btn-success btn-lg" type="submit" name="action" value="inscriptionprof">S'inscrire</button></div>
                        </form>
                    </div>
                    <!-- Formulaire d'inscription-->
                </div>
            </div>
        </div>
        <div class="card">

            <div class="card-header bg-danger" id="headingTwo">
                <a data-toggle="collapse" data-target="#collapseTwo">
                    <h2 class="mb-0">
                        <h3 class="text-center text-white">Se connecter</h3>
                    </h2>
                </a>
            </div>


            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container w-50 mx-auto my-5 text-center">
                        <form method="post">
                        <div class="form-group"><input class="form-control" type="email" name="moncourriel" placeholder="Courriel" required=""></div>
                        <div class="form-group"><input class="form-control" type="password" name="monmotdepasse" placeholder="Mot de passe" required=""></div>
                        <div class="form-group"><button class="btn btn-danger btn-lg" type="submit" name="action" value="connexionprof">Se connecter</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>