<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmació</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/confirmacio.js"></script>
</head>
<body class="background">
    <?php include "header.php"?>  
    <br>
    <h1>Confirmació</h1>

    <div id="container_conf">
        <div id="comandes"></div>

        <div id="dades"></div>
    </div>

    <!--
    $registre = $_POST['nom'] . ", " . $_POST['cognoms'] . ", " . $_POST['email'];
    $myfile = fopen ("logs.txt", "W") or die ("No es pot obrir el fitxer");
    fwrite($registre);
    fclose($myfile);
    -->

    <p>Perfecte! S'ha registrat la teva comanda.</p>

    <?php include "footer.php"?>
</body>
</html>