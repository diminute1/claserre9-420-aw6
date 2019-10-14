

        <?php
        
        require_once './Modele/DAO/EtudiantDAO.php';
        $user = EtudiantDAO::find($_SESSION['connected']);
        ?>
        Connected as <?= $user ?>
        <button onclick="logout()">Deconnect</button>
        <?php
        include_once("./View/Section/ajout_par_liste.php");
        ?>

<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>