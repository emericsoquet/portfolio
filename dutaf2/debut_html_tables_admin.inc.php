<!DOCTYPE html>
<html>
<head>
    <title>DUTAF</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- FEUILLES DE STYLE -->
    <link rel="stylesheet" type="text/css" href="../css/tables.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/search.css" />
    <link rel="stylesheet" type="text/css" href="../css/tables.css" />
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_gestion').DataTable( {
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json" }

                }
            );
        } );
    </script>

</head>
