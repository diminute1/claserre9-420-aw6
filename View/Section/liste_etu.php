<div class="container list-group">
		<?php
		foreach ($data as $etu) { ?>
		
		<div class="d-flex">
			<div class="list-group-item w-100"><?=$etu->getId()." ".$etu->getNom()." ".$etu->getPrenom();?>
				<div class="btn-group btn-group-sm float-right" role="group">
				<button type="button" class="btn btn-secondary btn-sm">Profil</button>
				<button type="button" class="btn btn-secondary btn-sm">Activités</button>
				</div>
			</div>
		</div>

		<?php } ?>	
</div> 