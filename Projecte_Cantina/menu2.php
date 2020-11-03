<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#" />
    <title>Menu</title>
    <!--<link rel="stylesheet" href="css/styles.css" type="text/css">--> 
    <style>    
    </style>
    <script type="text/javascript" src="js/script.js"></script>

    <style>  

* {
    margin: 0;
    padding: 0;
    list-style: none;
    font-family: FunctionRegular;
}

header{
    padding: 0px 40px;
    background-color: #383838;
    color: white;
    margin-bottom: 40px;
}
/* Este es un div contiene toda la pagia web, su padre es el body */
#bodyContenedor {
    width: 1024px;
    margin: 0 auto;
    background-color: white;
}

/* Este es un div contiene cada producto por separado */

.producto {
    float: left;
    margin-right: 40px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 100%;
    cursor: pointer;
}

.producto img {
    width: 100px;
}

.Comprar {
    color: green;
}

#carritoDeCompras {
    clear: left;
    padding-bottom: 15px;
    border-top: 1px solid #ccc;
}

#carritoDeCompras div {
    padding-top: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #ccc;
}

#carritoDeCompras img {
    float: left;
    width: 70px;
    margin-right: 10px;
}

#carritoDeCompras h2 h3 {
    font-size: 150%;
}

#carritoDeCompras .cantidad {
    float: right;
    line-height: 25px;
}

#carritoDeCompras button {
    display: inline-block;
    float: right;
    margin: 0 10px;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    color: white;
    border: none;
    background-color: #555555;
    font-size: 13px;
}

#carritoDeCompras .mas {
    margin-right: 40%;
}

#carritoDeCompras button:focus {
    outline: 0px;
}

#carritoDeCompras button:hover {
    box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.24), 0 1px 1px 0 rgba(0, 0, 0, 0.19);
}

#precioTotal {
    float: right;
    background-color: white;
    font-size: 200%;
}
</style>

</head>    
    <body>      
        <div id="bodyContenedor">
            <div id="productoContenedor">
                <div class="producto" data-idproducto="Refresco" data-img="images/coca_cola.jpg"
                    data-des="Coca-Cola bien fresquita" data-precio="10" data-cantidad="0"> 
                    <img src="images/coca_cola.jpg" alt="CocaCola">
                    <h2>Refresco</h2>
                    <p>10 €</p>
                    <p class="Comprar">Comprar</p>
                </div>
                <div class="producto" data-idproducto="Bocata" data-img="images/bocata.jpg"
                    data-des="B" data-precio="12" data-cantidad="0">
                    <img src="images/bocata.jpg" alt="Bocata">
                    <h2> Bocata </h2>
                    <p> 12 €</p>
                    <p class="Comprar">Comprar</p>
                </div>
                <div class="producto" data-idproducto="Croissant" data-img="images/croissant.jpg" data-des="cruasant dulce"
                    data-precio="15" data-cantidad="0"> <img src="images/croissant.jpg" alt="croissant">
                    <h2>Croissant</h2>
                    <p> 15 €</p>
                    <p class="Comprar">Comprar</p>
                </div>
                <div class="producto" data-idproducto="Paella" data-img="images/paella.jpg"
                    data-des="paella valensiana" data-precio="9" data-cantidad="0"> <img src="images/paella.jpg"
                        alt="Paella">
                    <h2>Paella</h2>
                    <p>100 €</p>
                    <p class="Comprar">Comprar</p>
                </div>
                <!-- 
                <div class="producto" data-idproducto="Chokis" data-img="img/Chokis.jpg"
                    data-des="Galletas con chispas de chocolate" data-precio="12" data-cantidad="0">
                    <img src="img/Chokis.jpg" alt="Chokis">
                    <h2>Chokis</h2>
                    <p>$12</p>
                    <p class="Comprar">Comprar</p>
                </div>  
                -->        
            </div>

            <div id="carritoDeCompras"> </div>
            <h2 id=precioTotal>A Pagar: $0</h2>
        </div>



            <button onclick="location.href='formulari.php'" class="checkout">CheckOut</button>           
    </body>
</html>