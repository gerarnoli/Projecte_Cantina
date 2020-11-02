<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <?php $_SESSION["pantalla"] = 3; ?>
    <?php include "header.php";?>
    <br>
    <div class="container">
        <div class="seleccio">
            <h2>Llista de comandes<h2>
        </div>
        <div class="form">
            <form action="process.php" method="POST"></form>
                    <h2>Introdueix les teves dades</h2>
                    <label for="nom">Nom:</label>
                    <input type="text"><br><br>
                    <label for="cognom">Cognom:</label>
                    <input type="text"><br><br>
                    <label for="email">Email:</label>
                    <input type="text"><br><br>
            </form>
            <br>
            <button onclick="location.href='verificacio.php'">Enviar</button>
        </div>
    </div>
    <script src="js/formulari.js"></script>    
    <br>
    <?php include "footer.php";?>
</body>
</html>


