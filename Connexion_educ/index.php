<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'EtudiantDAO.php';
        /* $etu=new Etudiant(1111111,"y","rt","123");
          EtudiantDAO::Create($etu);
          $list=EtudiantDAO::findAll();
          foreach ($list as $value) {
          echo $value."<br/>";
          }

          ?>
          find by id (1234567) :
          <?php
          $etu=EtudiantDAO::find(1234567);
          echo $etu; */
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
            <form method="post">
                Numero DA : <input name="da"><br/>
                Mot de passe:<input name="mdp" type="password"><br/>
                <input type="submit">
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