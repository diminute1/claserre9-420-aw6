	<div class="d-flex flex-row-reverse mx-5 my-5">
		<button class="btn btn-primary" data-toggle="modal" data-target="#ajouterRemise">
      Ajouter une remise
    </button>
	</div>
<?php if ($data["remise"] != null) {  ?>

<div class="list-group container my-5">
	<ul>
		<?php
		foreach ($data["remise"] as $remise) { ?>
			<li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
				<h3><i class="fas fa-user-check"></i>&nbsp; <?= $remise->getDate() ?></h3>
				<span>
					<a href="?action=afficherRemise&id=<?= $remise->getGroupe() ?>&date=<?=$remise->getDate()?>" class="btn btn-success text-white" role="button"><i class="fas fa-user-circle"></i>&nbsp; Afficher</a>
					<!--<a href="?action=afficherActivite&id=" class="btn btn-danger text-white" role="button"><i class="fas fa-chart-line"></i>&nbsp; Activités</a>-->
				</span>
			</li>
		<?php } ?>
	</ul>
</div>
<?php } ?>
