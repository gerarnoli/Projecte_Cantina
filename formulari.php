<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/formulari.js"></script>  
</head>
<body class="background">
    <?php include "header.php";?>
    <br>
    <div class="container">
        <div id="seleccio"></div>
        <div class="form">
            <form action="process.php" method="POST"></form>
                    <h2 class="formulari">Introdueix les teves dades</h2>
                    <label class="formulari" for="nom">Nom:</label>
                    <input type="text" id="nom"><br><br>
                    <label class="formulari" for="cognom">Cognom:</label>
                    <input type="text" id="cognom"><br><br>
                    <label class="formulari" for="email">Email:</label>
                    <input type="text" id="email"><br><br>
            </form>
            <br>
            <button onclick="validar()">Enviar</button>
        </div>
    </div>
    <br>
    <?php include "footer.php";?>
</body>
</html>