<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmació</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="#" />
    <script src="js/confirmacio.js"></script>
</head>
<body class="background">
    <?php include "header.php";?>
    <br>
    <h2>Perfecte! S'ha registrat la teva comanda.</h2>

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

    <?php include "footer.php"?>
</body>
</html>