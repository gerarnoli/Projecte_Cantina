<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <?php $_SESSION["pantalla"] = 5; ?>
    <?php include "header.php"; ?>
    <div class=error>
        <center><?php if (isset($_COOKIE)) {echo "<h3>Ja has fet una comanda avui, torna demà :-)</h3>";} ?></center>
    </div>
    <?php include "footer.php";?>
</body>
</html>


