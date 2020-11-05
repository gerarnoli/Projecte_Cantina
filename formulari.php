<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body class="background">
    <?php include "header.php"?>
    <br>
    <div class="container">
        <div id="seleccio" class>
            <h2 id="llista_comandes">Llista de comandes<h2>
        </div>
        <div class="form">
            <form method='POST' action='confirmacio.php'></form>
                    <h2 class="formulari">Introdueix les teves dades</h2>

                    <label class="formulari" for="nom">Nom:</label>
                    <input type="text" name="nom"><br><br>

                    <label class="formulari" for="cognom">Cognom:</label>
                    <input type="text" name="cognoms"><br><br>

                    <label class="formulari" for="email">Email:</label>
                    <input type="text" name="emial"><br><br>

                    <input type='submit' value='Enviar'>
            </form>
            <br>
        </div>
    </div>
    <script src="js/formulari.js"></script>
    <br>
    <?php include "footer.php"?>
</body>
</html>