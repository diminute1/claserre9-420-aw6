<!-- The Modal -->
<div class="modal modal fade" id="ajouteretudiant">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajouter un étudiant</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <form id="form-signin" class="form" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Numéro de DA</span>
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="id" required>
						</div>
							
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
                                <span class="input-group-text">Nom</span>
                            </div>
							
                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="nom" required>
						</div>
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
                                <span class="input-group-text">Prénom</span>
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="prenom" required>
						</div>
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
                                <span class="input-group-text">Code Permanent</span>
                            </div>
                            <input type="text" class="form-control" aria-describedby="basic-addon3" name="mdp" required>
						</div>
						<div class="form-group text-center mx-auto mt-3"><button class="btn btn-success btn-sm" type="submit" name="action" value="ajouteretudiant">Ajouter l'étudiant</button></div>
						<input type="text" class="form-control" aria-describedby="basic-addon3" name="idgroupe" value="<?=$data["groupe"]->get_id_groupe()?>" hidden>
					</form>
				</div>
			</div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>