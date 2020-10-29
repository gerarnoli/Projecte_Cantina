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

    <table id="taula">
    <thead>
        <tr>
            <th>Items</th>
            <th>Preu</th>
            <th>Quantitat</th>
            <th>Total</th>            
        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td class="goods"><img src="images/1.jpg" alt=""/><span> Bocata </span></td>
            <td class="price"> 20 </td>
            <td class="count">
            <span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>            
                        
        </tr>
        <tr>            
            <td class="goods"><img src="images/2.jpg" alt=""/><span> Cafe </span></td>
            <td class="price"> 10 </td>
            <td class="count"><span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>
                        
        </tr>
        <tr>
            <td class="goods"><img src="images/3.jpg" alt=""/><span> Donut </span></td>
            <td class="price"> 50 </td>
            <td class="count"><span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>
                    
        </tr>
        <tr>
            <td class="goods"><img src="images/4.jpg" alt=""/><span> Playstation </span></td>
            <td class="price"> 600 </td>
            <td class="count"><span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>
                      
        </tr>
    </tbody>
</table>
    <!--
    <input type="checkbox" id="vehicle1" name="vehicle1" value="xorizo">
    <label for="vehicle1"> Bocata Xorizo</label><br>
    <div class='btn'> + </div>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="cafe">
    <label for="vehicle1"> Cafe</label><br>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="coca">
    <label for="vehicle1"> CocaCola</label><br>
    
    <button onclick="enviarPedido()">Enviar Pedido</button>
    -->
      
    <script src="js/menu.js"></script>
</form>
</body>
<?php include "footer.php"; ?>
</html>