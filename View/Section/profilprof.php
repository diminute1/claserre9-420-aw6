<!--<p>Je suis connecté</p>-->
<?php //require_once './Model/DAO/groupeDAO.php'; 
?>

<div class="d-flex flex-row-reverse mx-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Creer un groupe d'étudiants
    </button>
</div>

<?php
$i = 0;
while ($data->next()) {
    $grp = $data->get($i);
    if ($grp == null) {
        echo ('<p>Aucun groupe trouvé</p>');
    }
    $p = $data->current();
    echo
	'<form method="post" action"?action=afficherGroupe">
	<input type="hidden" name="id_groupe" value="'.$p->get_id_groupe().'"/>
	<button type="submit">'.$p->get_nom_groupe().'</button>
	</form>';
	
}
?>

<br>
<br>
<br>
<button onclick="logout()">Deconnect</button>
<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>



<?php //include "liste_etu.php"
?>
<?php //include "ajout_par_liste.php"
?>
<?php //include "groupe.php"
?>