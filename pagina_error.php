<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <?php include "header.php"; ?>
        
    <br><br>

    <div class=error>
        <?php if (isset($_COOKIE)) {echo "<h2>Ja has fet una comanda avui, torna demà :-)</h2>";} ?>
    </div>


    <br><br><br>

    <?php include "footer.php";?>

</body>
</html>


