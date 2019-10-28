<div class="container list-group">
	<a class="list-group-item list-group-item-action">

		<?php
		foreach ($data as $etu) { ?>
		
		<div class="d-flex">
			<div class="p-2"><?=$etu->getId()." ".$etu->getNom()." ".$etu->getPrenom();?></div>
				<div class="ml-auto p-2">
				<div class="btn-group btn-group-sm" role="group">
				<button type="button" class="btn btn-secondary btn-sm">Profil</button>
				<button type="button" class="btn btn-secondary btn-sm">Activités</button>
				</div>
			</div>
		</div>
		<hr style="margin:0;">

		<?php } ?>	
   </a>
</div> 