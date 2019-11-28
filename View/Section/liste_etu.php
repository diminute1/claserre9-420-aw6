<?php if ($data["etu"] == null) { ?>
	<div class="d-flex flex-row-reverse mx-5 my-5">
		<form action="?action=newlist" method="post" enctype="multipart/form-data">
			<div class="input-group mb-3">
				<div class="custom-file">
					<input type="hidden" name="id" value=<?= $_REQUEST['id'] ?>>
					<input name="file" type="file" accept=".csv,.txt" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Importer une liste</label>
				</div>
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary" type="button">OK</button>
				</div>
			</div>
		</form>
	</div>
<?php } ?>

<div class="list-group container my-5">
	<ul>
		<?php

		foreach ($data["etu"] as $etu) { ?>
			<li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
				<h3><i class="fas fa-user-check"></i>&nbsp; <?= "(" . $etu->getId() . ")" . "-" . $etu->getNom() . ", " . $etu->getPrenom();  ?></h3>
				<span>
					<a href="?action=afficherProfil&id=<?= $etu->getId() ?>" class="btn btn-success text-white" role="button"><i class="fas fa-user-circle"></i>&nbsp; Profil</a>
					<a href="?action=afficherActivite&id=<?= $etu->getId() ?>" class="btn btn-danger text-white" role="button"><i class="fas fa-chart-line"></i>&nbsp; Activités</a>
				</span>
			</li>
		<?php } ?>
	</ul>
</div>