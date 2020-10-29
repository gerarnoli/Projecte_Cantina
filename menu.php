<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">        
    <title>Menu</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

</head>
<body>
<?php include "header.php"; ?>  
    <h3 class="titol1">Menu Cantina Pedralbes</h3>  

    
    <input type="checkbox" id="vehicle1" name="vehicle1" value="xorizo">
    <label for="vehicle1"> Bocata Xorizo</label><br>
    <div class='btn'> + </div>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="cafe">
    <label for="vehicle1"> Cafe</label><br>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="coca">
    <label for="vehicle1"> CocaCola</label><br>

    <button onclick="enviarPedido()">Enviar Pedido</button>
    
      
    <script src="js/menu.js"></script>
</form>
</body>
<?php include "footer.php"; ?>
</html>