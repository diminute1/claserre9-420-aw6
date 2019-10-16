    <?php
      
        require_once './Model/DAO/EtudiantDAO.php';
        $user = EtudiantDAO::find($_SESSION['connected']);
        ?>
        Connected as <?= $user ?>
        <button onclick="logout()">Deconnect</button>

<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>
