<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    </style>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <?php include("header.php") ?>
    <div id="productos" class="productos">
        <div id="producto" class="producto"> <img src="images/bocata.jpg" width="200" height="200">
            <h1>Bocata</h1>
            <p> 5 €</p>
            <input id="bocata" type="number" max="5" min="0">
            <button onclick="afegirCarro(bocata);">Pal Carro</button>
        </div>
        <div id="producto" class="producto"> <img src="images/croissant.jpg" width="200" height="200">
            <h1>Croissant</h1>
            <p> 3 €</p>
            <input id="croissant" type="number" max="5" min="0">  
            <button onclick="afegirCarro(croissant);">Pal Carro</button>
        </div>
        <div id="producto" class="producto"> <img src="images/coca_cola.jpg" width="200" height="200">
            <h1>Coca Cola</h1>
            <p> 2 €</p> 
            <input id="coca_cola" type="number" max="5" min="0">   
            <button onclick="afegirCarro(coca_cola);">Pal Carro</button>
        </div>
        <div id="producto" class="producto"> <img src="images/taza_cafe.jpg" width="200" height="200">
            <h1>Cafe</h1>
            <p> 5 €</p>  
            <input id="tassa_cafe" type="number" max="5" min="0"> 
            <button onclick="afegirCarro(tassa_cafe);">Pal Carro</button>
        </div>
    </div>
    <div id="listafinal" class="listafinal"> 
        <h2 id=preciofinal>A Pagar</h2>
        <button onclick="tanquemLlista()" class="checkout">CheckOut</button>   
    </div>
</body>
</html>