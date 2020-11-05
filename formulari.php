<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--
    <style>
        h2, label {
            color: black;
        }
        .header {
            background-color: cornflowerblue;
            left: 0;
            top: 0;
            width: 100%;
            text-align: left;   
            height: 60px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular';  
            color: white; 
        }
    </style>
    -->
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
                    <h2 class="formulari">Introdueix les teves dades</h2>
                    <label class="formulari" for="nom">Nom:</label>
                    <input type="text"><br><br>
                    <label class="formulari" for="cognom">Cognom:</label>
                    <input type="text"><br><br>
                    <label class="formulari" for="email">Email:</label>
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


