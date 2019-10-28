<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>connexion</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    <body id='bodylogin'>
        <?php
        require_once 'EtudiantDAO.php';
        $etu = new Etudiant(1234567, "y", "rt", "123");
        EtudiantDAO::Create($etu);
        ?>
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_POST["da"]) && isset($_POST["mdp"])) {
            $etu = EtudiantDAO::find($_POST['da']);
            if ($etu != null && $etu->getMdp() == $_POST['mdp']) {
                $_SESSION['connected'] = $etu->getId();
            }
        }
        if (isset($_GET['action']) && $_GET['action'] == "logout") {
            session_destroy();
        }
        if (!isset($_SESSION['connected']) || $_SESSION['connected'] == null) {
            ?>
            <form method="post" action="?action=connexionetu" id='form-signin' class="form">
                <h1>Connexion</h1>
                <hr/>
                Numero DA<br/><input class="form-control" name="da"><hr/>
                Mot de passe<br/><input class="form-control" name="mdp" type="password"><br/>
                <button  class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
                <hr/>
            </form>
            <?php
        } else {
            $user = EtudiantDAO::find($_SESSION['connected']);
            ?>
            Connected as <?= $user ?>
            <button onclick="logout()">Deconnect</button>
            <?php
        }
        ?>

    </body>

</html>
<script>
    function logout() {
        url = window.location.href;
        new_url = url.substring(0, url.indexOf('?'));
        window.location.href = new_url + "?action=logout";
    }
</script>

<style>
    #bodylogin{
        text-align: center !important;
        align-items: center;
        height: 100%;
    }

    #form-signin{
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

</style>