<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <?php include "header.php";?>
    <br>
    <div class="container">
        <div id="seleccio">
            <h2 id="llista_comandes">Llista de comandes<h2>
        </div>
        <div class="form">
            <form action="confirmacio.php" method="POST"></form>
                    <h2 class="formulari">Introdueix les teves dades</h2>
                    <label class="formulari" for="nom">Nom:</label>
                    <input type="text"><br><br>
                    <label class="formulari" for="cognom">Cognom:</label>
                    <input type="text"><br><br>
                    <label class="formulari" for="email">Email:</label>
                    <input type="text"><br><br>
            </form>
            <br>
            <input type='submit' value='Enviar'>
        </div>
    </div>
    <script src="js/formulari.js"></script>    
    <br>
    <?php include "footer.php"?>
</body>
</html>


