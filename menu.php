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
    .productos{
        float: left;
        display: flex;
        border: 1px solid red;
    }
    .producto{
        margin: 10px;
        padding: 10px;
        border: 1px solid blue;
    }
    .listafinal{
        float: left;
        margin: 10px;        
    }
    </style>
</head>    
    <body>
            <div id="productos" class="productos">
 
                <div id="producto" class="producto"> <img src="images/bocata.jpg" width="200" height="200">
                <h1> Bocata </h1>
                <p> 5 €</p>  
                <input class="numero" type="number" value="" max="5" min="0">
                <input type="button" value="Pal Carro"  id="bocata">           
                </div>
                <div id="producto" class="producto"> <img src="images/croissant.jpg" width="200" height="200">
                <p> Croissant </p>
                <p> 3 €</p>
                <input class="numero"  type="number" value="" max="5" min="0">  
                <input type="button" value="Pal Carro"  id="croissant"> 
                </div>
                <div id="producto" class="producto"> <img src="images/coca_cola.jpg" width="200" height="200">
                <p> Coca Cola</p>
                <p> 2 €</p> 
                <input type="number" value="" max="5" min="0">   
                <input type="button" value="Pal Carro"  id="coca_cola"> 
                </div>
                <div id="producto" class="producto"> <img src="images/taza_cafe.jpg" width="200" height="200">
                <p> Cafe </p>
                <p> 5 €</p>  
                <input type="number" value="" max="5" min="0"> 
                <input type="button" value="Pal Carro"  id="taza_cafe">  
                </div>             
                
            </div>
            <div id="listafinal" class="listafinal"> 
                <h2 id=preciofinal> A Pagar </h2>
                <button onclick="location.href='formulari.php'" class="checkout">CheckOut</button>   
            </div>
            
                    
    </body>
</html>