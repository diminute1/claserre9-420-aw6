<!--<p>Je suis connecté</p>-->
<?php //require_once './Model/DAO/groupeDAO.php'; 
?>

<div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#creergroupe">
        Creer un groupe d'étudiants
    </button>
</div>
<div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifiermdp">
        Modifier le mot de passe
    </button>
</div>




<br>
<br>
<br>


<button onclick="logout()">Se déconnecter</button>
<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>