<header>
    <div id="width-top">
        <div class="logo" id="logo-header"><a href="index.php">Dutaf</a></div>
        <div id="slogan">Spécialiste de la BD depuis 2020</div>
    </div>

    <nav>
        <div id="first-part-nav">
            <div class="logo" id="logo-nav"><a href="index.php">Dutaf</a></div>

            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="listing.php">Catalogue</a></li>
                <li><a href="admin/admin.php">Administration</a></li>
                <li><a href="form_recherche.php">Recherche</a></li>

            </ul>
        </div>

        <div id="members">
            <a href="panier.php"><img src="img/basket.png" /></a><p id="nb_panier">

                <?php

                    if(!empty($_SESSION['panier'])) {

                        $nb = 0;

                        foreach($_SESSION['panier'] as $id => $infos) {
                            $nb += $infos['quantite'];
                        }

                        if ($nb <= 9) {
                            echo $nb;
                        }
                        else {
                             echo '9+';
                        }

                    }


                ?>


            </p>
            &nbsp;
            <div id="connexion">
            <?php
                if (!empty($_SESSION['prenom_client'])) { // SI UN UTILISATEUR S'EST CONNECTÉ

                echo '<p>Bonjour, <a href="profil.php" id="profil-link"> '.$_SESSION['prenom_client'].'</a> <span id="cont-obl">!</span> </p>';
                echo '<a href="deconnexion.php"><p class="deco">Déconnexion</p></a>';
                }

                else { // S'IL N'Y A AUCUN UTILISATEUR

                echo '<a href="connexion.php"><p>Connexion</p></a>';
                echo '<a href="inscription.php"><p>Inscription</p></a>';
                }

            ?>
            </div>
        </div>
    </nav>

</header>