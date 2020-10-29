<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    
    <?php include "header.php";?>

    <br>

    <div id="seleccio">
        <h2>El teu carro</h2>
    </div>

    <br><br>

    <div id="form">
        <form action="process.php" method="POST"></form>
                <h2>Introdueix les teves dades</h2>
                <label for="nom">Nom:</label>
                <input type="text"><br><br>
                <label for="cognom">Cognom:</label>
                <input type="text"><br><br>
                <label for="email">Email:</label>
                <input type="text"><br><br>
        </form>
    </div>

    <script>
        <script src="js/formulari.js"></script>    
    </script>

    <br>

    <?php include "footer.php";?>

</body>
</html>




