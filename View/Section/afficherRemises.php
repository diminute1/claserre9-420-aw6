<div class=jumbotron>
  <h1>Groupe <?=$data["groupe"]->get_nom_groupe()?></h1>
  <h2>Remise du <?=$data["remise"]->getDate()?></h2>
</div>
<div class="d-flex flex-row-reverse mx-5 my-5">


  <div class="list-group container my-5">
  	<ul>
  		<?php

  		foreach ($data["forms"] as $remisForm) {
        if($remisForm->getNote()==""){ ?>
  			<li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
  				<h3><i class="fas fa-user-check"></i>&nbsp; <?= "(" . $remisForm->getEtu() . ")" ?></h3>
  				<span>
            Non Remis
  				</span>
  			</li>
  		<?php }else{
        ?>
        <li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
          <h3><i class="fas fa-user-check"></i>&nbsp; <?= "(" . $remisForm->getEtu() . ")" ?></h3>
          <span>
            Non Remis
            <a href="?action=afficherProfil&id=<?= $remisForm->getEtu() ?>" class="btn btn-success text-white" role="button"><i class="fas fa-user-circle"></i>&nbsp;Corriger</a>
          </span>
        </li>
        <?php
      }
    } ?>
  	</ul>
  </div>

</div>
