<p>Je suis connecté</p>
 <button onclick="logout()">Deconnect</button>

<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>
<hr/>
<?php include "liste_etu.php"?>
<?php include "ajout_par_liste.php"?>
<hr/>
<?php include "groupe.php"?>