<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <?php include "header.php"; ?>
        
    <br><br>

    <?php if (isset($_COOKIE)) {echo "Ja has fet una comanda avui, torna demà :-)";} ?>

    <br><br><br>

    <?php include "footer.php";?>

</body>
</html>


