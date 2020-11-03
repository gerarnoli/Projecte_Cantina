<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#" />
    <title>Menu</title>
    <!--<link rel="stylesheet" href="css/styles.css" type="text/css">--> 
    <style>
    .items {
    display: flex;    
    overflow: none;  
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 10px;  
    }
    .item {
    display: flex;
    text-align: center;
    padding: 10px;
    border: 2px dashed red;x
    }
    
    .imagen_item{
    height: 200px;
    width: 200px;
    }

    </style>
    <script type="text/javascript" src="js/script.js"></script>

</head>    
    <body>           
        <div class="items">                 
                    <div id="items1">
                        <div class="item">
					        <img src="images/bocata.jpg" class="imagen_item">
					        <h2 class="item_name">Bocata</h2>
					        <h3 class="precio">6.00</h3>
					        <button class="boton" data-action="comprar">Comprar</button>
                        </div>

                        <div class="item">
                        <img src="images/coca_cola.jpg" class="imagen_item" src="" alt="cocacola">
                        <h2 class="item_name">Coke</h2>
                        <h3 class="precio">8.00</h3>
                        <button class="boton" data-action="comprar">Comprar</button>
	                    </div>                 
                    </div>

                    <div id="items2">
                        <div class="item">
					    <img src="images/croissant.jpg" class="imagen_item" alt="croissant">
					    <h2 class="item_name">Croissant</h2>
					    <h3 class="precio"> 12.00</h3>
					    <button class="boton" data-action="comprar">Comprar</button>
	                    </div>

                        <div class="item">
                        <img src="images/paella.jpg" class="imagen_item" alt="paella">
                        <h2 class="item_name"> Paella </h2>
                        <h3 class="precio"> 5.00 </h3>
                        <button class="boton" data-action="comprar">comprar</button>
                        </div>
                    </div>
            
                </div>
                
                <div id="carritoDeCompras"> </div>
                <h2 id=precioTotal>A Pagar: $0</h2>
                    
            <button onclick="location.href='formulari.php'" class="checkout">CheckOut</button>    
       
    </body>
</html>