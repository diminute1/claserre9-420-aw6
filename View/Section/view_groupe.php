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



<?php include "liste_etu.php";
?>