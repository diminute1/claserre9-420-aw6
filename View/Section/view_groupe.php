<div class=jumbotron>
  <h1>Groupe <?=$data["groupe"]->get_nom_groupe()?></h1>
</div>
<nav>
  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-etu-tab" data-toggle="tab" href="#nav-etu" role="tab" aria-controls="nav-etu" aria-selected="true">Étudiants</a>
    <a class="nav-item nav-link" id="nav-remise-tab" data-toggle="tab" href="#nav-remise" role="tab" aria-controls="nav-remise" aria-selected="false">Remises</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-etu" role="tabpanel" aria-labelledby="nav-etu-tab">
    <?php include "liste_etu.php";?>
  </div>
  <div class="tab-pane fade" id="nav-remise" role="tabpanel" aria-labelledby="nav-profile-remise">
    <?php include "liste_remises.php"?>
  </div>
</div>
<script type="text/javascript">
$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
  localStorage.setItem('activeTab', $(e.target).attr('href'));
});

// Acá guarda el index al cual corresponde la tab. Lo podés ver en el dev tool de chrome.
var activeTab = localStorage.getItem('activeTab');

// En la consola te va a mostrar la pestaña donde hiciste el último click y lo
// guarda en "activeTab". Te dejo el console para que lo veas. Y cuando refresques
// el browser, va a quedar activa la última donde hiciste el click.
console.log(activeTab);

if (activeTab) {
 $('a[href="' + activeTab + '"]').tab('show');
}
</script>
