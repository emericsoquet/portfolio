<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Gestion des bande dessinées</title>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready( function () {
                $('#table_gestion').DataTable();
            } );
        </script>
    </head>

    <body>


        <a href="admin.html"><button>Retour</button></a>
        <a href="bd_new_form.php"><button>Ajouter une BD</button></a>

        <?php

            $bdd = new PDO('mysql:host=localhost;dbname=mmi19d13', 'mmi19d13', '@C6774663dd');
        
            $tout = $bdd->query('SELECT * FROM album INNER JOIN auteur ON auteur.auteur_id = album.auteur_id_ ');

            echo '<table id="table_gestion"> <thead> <tr> <th>titre</th> <th>prix</th> <th>auteur</th> <th></th> <th></th> </tr> </thead> </tbody>';

            
            echo '</tbody> </table>';
        ?>
        

    </body>
</html>