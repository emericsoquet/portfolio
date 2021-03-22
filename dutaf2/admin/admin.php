<?php
    require '../config.inc.php';
?>

<?php
    require '../debut_html_indexes_admin.inc.php';
?>

<?php
    require '../header_admin.inc.php';
?>


<section id="bg-admin">
            <h1>Espace admin.</h1>

            <div id="intro-dutaf">

                <div id="text-intro"><p>Cette page est un peu différente car uniquement accessible à l'équipe Dutaf, soyez vigilant-e-s à ce que vous faîtes ! </p><p>En effet, à partir d'ici, vous pouvez gérer toutes les données concernant vos bande-dessinées, qu'ils s'agissent des auteur-e-s, éditeurs et même des bandes dessinées elles-mêmes.</p> <p>Vous pouvez bien sûr retourner à l'accueil, visible des visiteurs, en suivant les liens de la barre de navigation ou le suivant.</p></div>
            </div>
        </section>

        <section>

            <article>
                <h2>Bande-dessinées</h2>
                <div class="border-article"></div>
                <p>Vous pourrez modifier l'ISBN, le prix, le titre, l'auteur, l'éditeur et la série d'une BD. Vous pouvez aussi en ajouter ou en supprimer.</p>
                <div class="button-link"><a href="bd_gestion.php">En avant !</a></div>
            </article>

            <article>
                <h2>Auteurs</h2>
                <div class="border-article"></div>
                <p>Suppression, ajout et modifications s'offrent à vous. Pour les auteurs, il est possible de modifier leur nom, prénom, nationalité et âge.</p>
                <div class="button-link"><a href="auteur_gestion.php">On y va !</a></div>
            </article>

            <article>
                <h2>Éditeurs</h2>
                <div class="border-article"></div>
                <p>Vous ne pourrez modifier que le nom, le pays et le téléphone de l'éditeur. Mais vous pouvez supprimer ou ajouter un nouvel éditeur, encore une fois.</p>
                <div class="button-link"><a href="editeur_gestion.php">C'est parti !</a></div>
            </article>      

        </section>

<?php
    require '../footer.inc.php';
?>


<?php
    require '../fin_html.inc.php';
?>