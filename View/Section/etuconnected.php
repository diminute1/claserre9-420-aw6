    <?php

    require_once './Model/DAO/EtudiantDAO.php';
 ?>
    <nav>
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-etu-form-tab" data-toggle="tab" href="#nav-etu-form" role="tab" aria-controls="nav-etu" aria-selected="true">Les formulaires</a>
        <a class="nav-item nav-link" id="nav-etu-remise-tab" data-toggle="tab" href="#nav-etu-remise" role="tab" aria-controls="nav-remise" aria-selected="false">Remises</a>
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active" id="nav-etu-form" role="tabpanel" aria-labelledby="nav-etu-form-tab">
        <div class="d-flex flex-row-reverse mx-5 my-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouterFormulaire">
                Ajouter un Formulaire
            </button>
        </div>
	<?php include_once './View/Section/etu_afficher_form.php'; ?>
    </div>
    <div class="tab-pane fade" id="nav-etu-remise" role="tabpanel" aria-labelledby="nav-etu-remise-tab">
      <?php if ($data != null) {  ?>
      <div class="list-group container my-5">
      	<ul>
      		<?php
      		foreach ($data as $remise) { ?>
      			<li class="list-group-item d-flex justify-content-between align-items-center py-5 shadow p-5 mb-1 bg-white rounded">
      				<h3><i class="fa fa-calendar"></i>&nbsp; <?= $remise->getDate() ?></h3>
      				<span>
      					<button data-toggle="modal" data-target="#choisirFormulaireRemise" onclick="document.getElementById('idremise').value='<?=$remise->getId()?>'" class="btn btn-success text-white" ><i class="fas fa-user-circle"></i>&nbsp; Remettre</button>
      				</span>
      			</li>
      		<?php } ?>
      	</ul>
      </div>
      <?php } ?>
    </div>
  </div>


  <div class="modal modal fade" id="choisirFormulaireRemise">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Remettre un Formulaire</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form class="form" action="?action=RemettreForm" method="post" style="text-align:center" style="margin-left: 20%;margin-right: 20%">
                 <input id="idremise"  type="hidden" name="remise"/>
                    <?php
                    $formulaires=FormulaireService::trouverParEtudiant($_SESSION['connected']);
                    if(count($formulaires)<=0){
                      echo "Aucun Formulaire à remettre";
                    }else{
                      ?>
                      <select name="formulaire">
                      <?php
                    foreach($formulaires as $form){
                    ?>
                    <option value="<?php echo $form->getId();?>"><?php echo $form->getSport();?></option>
                    <?php
                  }?>
                  </select>
                  <?php
                }
                      ?>

                    <hr />
                    <button class="btn btn-primary" type="submit">Remettre Formulaire</button>
                    <br><br>
                    <hr>
                </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Annuler</button>
              </div>
          </div>
      </div>
  </div>


  <!-- The Modal -->
  <div class="modal modal fade" id="ajouterFormulaire">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Ajouter un Formulaire</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form class="form" style="text-align:center" style="margin-left: 20%;margin-right: 20%">
                    Nom de l'activité
                    <br>
                    <input id="sport" class="formuElement" type="text" >
                    <br>
                    Type de l'activité
                    <br>
                    <select id="type" class="formuElement" name="type">
                        <option>---</option>
                        <option id="continue">continue</option>
                        <option id="interval">interval</option>
                        <option id="varié">varié</option>
                    </select>
                    <br>
                    <div>
                      <table class="table">
                        <thead>
                          <th>Exercice</th>
                          <th>Durée (minutes)</th>
                          <th></th>
                        </thead>
                        <tbody id="body_exo">

                        </tbody>
                      </table>
                    </div>
                    <hr style="margin-left: 30%;margin-right: 30%">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajouter un exercice</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <span style="cursor: pointer" class="dropdown-item pointer">par nombre de répétition</span>
                            <span style="cursor: pointer" class="dropdown-item" onclick="addExercice()" href="">par durée</span>
                        </div>
                    </div>
                    <hr style="margin-left: 20%;margin-right: 20%">
                    Fréquence cardiaque
                    <br>
                    <input id="bpm" class="formuElement"type="number" min="50" placeholder="BPM">
                    <hr style="margin-left: 20%;margin-right: 20%">
                    Nombre de fois pratiqué cette semaine
                    <br>
                    <input id="frequence" class="formuElement" type="number" min="1" max="7" style="width: 3em;">
                    <br />
                    <hr />
                    <button class="btn btn-primary" type="submit">Remettre</button>
                    <br><br>
                    <hr>
                </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Annuler</button>
              </div>
          </div>
      </div>
  </div>


    <script>
    var i=0;
    var exercices=[];
        function addExercice(){
          document.getElementById('body_exo').innerHTML+="<div id='exo"+i+"'><td>"
          +"<input type = \"text\"  name=\"nameExo\" ></td><td>"
          +"<input type = \"number\" style = \"width: 3em;\"></td><td>"
          +"<span  class=\"btn fa fa-trash\" style=\"cursor:pointer;color:red;\"></span>"
          +"</td></div>";
          i++;
          exercice.push(i);
          console.log(exercice);
        }

        function logout() {
            url = window.location.href;
            new_url = url.substring(0, url.indexOf('?'));
            window.location.href = new_url + "?action=deconnexion";
        }
    </script>
