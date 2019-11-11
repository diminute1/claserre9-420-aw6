    <?php

    require_once './Model/DAO/EtudiantDAO.php';
    $user = EtudiantDAO::find($_SESSION['connected']);
    ?>
    Connected as <?= $user ?>
    <button onclick="logout()">Deconnect</button>
    <?php include_once './View/Section/etu_afficher_form.php'; ?>
    <div class="d-flex flex-row-reverse mx-5 my-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifiermdp">
        Modifier le mot de passe
    </button>
    </div>
    <script>
        function logout() {
            url = window.location.href;
            new_url = url.substring(0, url.indexOf('?'));
            window.location.href = new_url + "?action=deconnexion";
        }
    </script>