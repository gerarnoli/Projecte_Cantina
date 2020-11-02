<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cantina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include("top.php") ?>

    <div class="container">
    <h2>Carousel Example</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="la.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
                </div>
            </div>
            
            <div class="item">
                <img src="ny.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

    <?php include("down.php") ?>
</body>
=======
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cantina Pedralbes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
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
                <div class="item active">
                    <img src="images/foto4.jpg" alt="comida" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Precios</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="images/foto2.jpg" alt="bar" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Entrada</h3>
                    </div>
                </div>

                <div class="item">
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
    </div>

    <?php include("footer.php") ?>
</body>

>>>>>>> bfbcdf0bf6d1404bd1a6d9d6f62ab52a52c7ad69
</html>