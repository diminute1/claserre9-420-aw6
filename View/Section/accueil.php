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





        <form method="post" action="?action=connexion" id='form-signin' class="form">
            <h1>Connexion</h1>
            <hr/>
            Numero DA<br/><input class="form-control" name="da" required=""><hr/>
            Mot de passe<br/><input class="form-control" name="mdp" type="password" required=""><br/>
            <button  class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
            <hr/>
        </form>
        




    </body>

</html>


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