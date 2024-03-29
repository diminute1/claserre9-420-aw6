<div class="container">
	<div class="card-deck">
		<div class="card">
			<a id="link" href="?action=portailetu">
				<img class="card-img-top" src="https://dummyimage.com/600x400/000000/fff" alt="Professeur">
				<div class="card-body">
					<h5 class="card-title">Formulaire d'activité physique</h5>
				</div>
			</a>
		</div>
		<div>
                    <form id="form-signin" class="form" method="post" action="">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Le nom du groupe</span>
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="nomGroupe" required>
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Session</label>
                            </div>
                            <select class="custom-select" name="lasession" required>
                                <option selected>Choisir...</option>
                                <option value="Automne">Automne</option>
                                <option value="Été">Été</option>
                                <option value="Hiver">Hiver</option>
                            </select>
                        </div>


                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend" required>
                                <label class="input-group-text">Année</label>
                            </div>
                            <select class="custom-select" name="annee">
                                <option selected>Choisir...</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                        <div class="form-group text-center mx-auto mt-3"><button class="btn btn-success btn-sm" type="submit" name="action" value="creergroupe">Créer le groupe</button></div>
                    </form>
                    </div>
		
		
	</div>
</div>