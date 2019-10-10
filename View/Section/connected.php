<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        
        require_once './Modele/EtudiantDAO.php';
        $user = EtudiantDAO::find($_SESSION['connected']);
        ?>
        Connected as <?= $user ?>
        <button onclick="logout()">Deconnect</button>
        <?php
        include_once("./View/Section/ajout_par_liste.php");
        ?>
    </body>
</html>
<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=deconnexion";
    }
</script>