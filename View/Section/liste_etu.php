<div class="list-group container my-5">
	<ul>
		<?php

		foreach ($data as $etu) { ?>
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