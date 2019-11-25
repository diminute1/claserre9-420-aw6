<div class=jumbotron>
  <h1>Groupe <?=$data["groupe"]->get_nom_groupe()?></h1>
  <h2>Remise du <?=$data["remise"]->getDate()?></h2>
</div>
<div class="d-flex flex-row-reverse mx-5 my-5">

  <div class="list-group container my-5">
  	<ul>
  		<?php

  		foreach ($data["etu"] as $etu) {
        $rem=$data["remises"][$etu->getId()];
        $remis=false;
        foreach ($rem as $r) {
          $remis=FormulaireService::remis($r,$etu);
        }
        if(!$remis){ ?>
  			<li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
  				<h3><i class="fas fa-user-check"></i>&nbsp; <?=  $etu->getPrenom() . " " . $etu->getNom()  ?></h3>
  				<span>
            Non Remis
  				</span>
  			</li>
  		<?php }else{
        ?>
        <li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
          <h3><i class="fas fa-user-check"></i>&nbsp; <?= "(" .  $etu->getNom() . ")" ?></h3>
          <span>
            <a href="?action=afficherProfil&id=<?=  $etu->getNom() ?>" class="btn btn-success text-white" role="button"><i class="fas fa-user-circle"></i>&nbsp;Corriger</a>
          </span>
        </li>
        <?php
      }
    } ?>
  	</ul>
  </div>

</div>
