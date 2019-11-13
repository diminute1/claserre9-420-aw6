<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?action=accueil">Éducation physique</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <?php if (!isset($_SESSION['connected'])) { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-5 active">
                        <a class="nav-link" href="?action=accueil">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="?action=apropos">À propos</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="?action=contact">Contact</a>
                    </li>

                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="https://www.crosemont.qc.ca/">
                            <img src="./style/img/logo.png" alt="Logo" style="width:150px;">
                        </a>
                    </li>
                </ul>
            <?php } ?>

            <?php if (isset($_SESSION['connected'])) { ?>
                <!-- Dummy HTML to keep dropdown button right align -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-5 active">
                        <a class="nav-link" href="#">Notions théoriques<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="#">Notions pratiques</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link disabled" href="#"></a>
                    </li>
                </ul>
                <!-- Dummy HTML to keep dropdown button right align -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>&nbsp;&nbsp;<?= $_SESSION['connected'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mon profil</a>
                            <a class="dropdown-item" href="?action=deconnexion">Se déconnecter</a>
                        </div>
                    </li>
                </ul>

            <?php } ?>
        </div>
    </nav>
</div>