<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cantina Pedralbes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="background">
    <?php include("header.php") ?>

    <h2 id="benvingut">Benvingut a la Cantina Pedralbes</h2>
    <div class="container2">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!--slides -->
            <div class="carousel-inner">
                <div class="item size active">
                    <img src="images/foto4.jpg" alt="comida" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Precios</h3>
                    </div>
                </div>

                <div class="item size">
                    <img src="images/foto2.jpg" alt="bar" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Entrada</h3>
                    </div>
                </div>

                <div class="item size">
                    <img src="images/foto3.jpg" alt="bar" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Bar</h3>
                    </div>
                </div>
            </div>

            <!--flechas-->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

    
        <button id="button" onclick="location.href='menu.php'">Menu</button>
        <button onclick="location.href='admin/admin.php'">Admin</button>

    </div>

    

    <?php include("footer.php") ?>
</body>

</html>
