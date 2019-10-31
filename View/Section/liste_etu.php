<div class="container list-group">
	<?php
	if ($data == null) { ?>
		<div class="d-flex flex-row-reverse mx-5 my-5">
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#importeretudiant">
				Importer un liste d'étudiants
			</button>
		</div>
		<?php } else {
			foreach ($data as $etu) { ?>
			<div class="d-flex">
				<div class="list-group-item w-100"><?= $etu->getId() . " " . $etu->getNom() . " " . $etu->getPrenom(); ?>
					<div class="btn-group btn-group-sm float-right" role="group">
						<button type="button" class="btn btn-secondary btn-sm">Profil</button>
                                                <a href="?action=afficherActivite&id=<?=$etu->getId()?>" class="btn btn-secondary btn-sm">Activités</a>
					</div>
				</div>
			</div>

		<?php } ?>
		<div class="d-flex">
			<div class="list-group-item w-100">Ajouter un étudiant
				<div class="btn-group btn-group-sm float-right" role="group">
					<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ajouteretudiant"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	<?php } ?>
</div>