<!DOCTYPE html>
<html>

    <head>
        <title></title>
    </head>

    <body>
        <?php
        require_once './Modele/EtudiantDAO.php';
        $user = EtudiantDAO::find($_SESSION['connected']);
        ?>
        Connected as <?= $user ?>
        <button onclick="logout()">Deconnect</button>
    </body>
</html>
<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>