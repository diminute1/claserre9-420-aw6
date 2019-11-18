    <?php

    require_once './Model/DAO/EtudiantDAO.php';
	include_once './View/Section/etu_afficher_form.php'; ?>
    <script>
        function logout() {
            url = window.location.href;
            new_url = url.substring(0, url.indexOf('?'));
            window.location.href = new_url + "?action=deconnexion";
        }
    </script>