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
    <h1 style="color: black">Confirmació</h1>
    
    <?php

        echo "<h2>Dades</h2>";
        echo $_POST['nom'];
        echo $_POST['cognoms'];
        echo $_POST['email'];

        $registre = $_POST['nom'] . ", " . $_POST['cognoms'] . ", " . $_POST['email'];
        $myfile = fopen ("logs.txt", "W") or die ("No es pot obrir el fitxer");
        fwrite($registre);
        fclose($myfile);
    ?>

    <p>Perfecte! S'ha registrat la teva comanda.</p>

    <?php include "footer.php"?>
</body>
</html>