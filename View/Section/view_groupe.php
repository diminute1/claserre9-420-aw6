<br>
<a href="?action=groupe" class="btn btn-primary">Retour<a/>
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

<div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
        Ajouter un étudiant
    </button>
</div>


<?php include "liste_etu.php";
?>