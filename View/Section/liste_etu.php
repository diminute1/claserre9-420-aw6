
<div class="container list-group">
		<?php
		if($data==null){
			echo "importer une liste d'étudiant";
		}
		else{
			foreach ($data as $etu) { ?>
			
			
				<div class="list-group-item w-100"><?=$etu->getId()." ".$etu->getNom()." ".$etu->getPrenom();?>
					<div >
					<button type="button" class="btn btn-secondary btn-sm">Profil</button> 
					
					<button type="submit" class="btn btn-secondary btn-sm"><a id="link" href="?action=prof_form">Activités</button>
				    </div>
					</div>
				
	

		<?php } ?>


		<div class="d-flex">
				<div class="list-group-item w-100">Ajouter un étudiant
					<div class="btn-group btn-group-sm float-right" role="group">
					<button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		<?php } ?>	
</div> 