<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">        
    <title>Menu</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<?php include "header.php"; ?>  
    <h3 class="titol1">Menu Cantina Pedralbes</h3>  

    <table id="cartTable">
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
            
            <td class="goods"> <img src="" alt=""/><span> Bocata </span></td>
            <td class="price"> 20 </td>
            <td class="count"> <span class="reduce"> - </span>
            <input class="count-input" type="text" id="cantidad" name="cantidad"/><span class="add" name="add"> + </span></td>            
                        
        </tr>
        <tr>            
            <td class="goods"><img src="" alt=""/><span> Cafe </span></td>
            <td class="price"> 10 </td>
            <td class="count"><span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>                        
        </tr>
        <tr>
            <td class="goods"><img src="" alt=""/><span> Donut </span></td>
            <td class="price"> 50 </td> <td class="count"><span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>
                    
        </tr>
        <tr>
            <td class="goods"><img src="" alt=""/><span> Playstation </span></td>
            <td class="price"> 600 </td> <td class="count"><span class="reduce"> - </span>
            <input class="count-input" type="text" value="1"/><span class="add"> + </span></td>
                      
        </tr>
    </tbody>
</table>     
    
</form>
</body>
<?php include "footer.php"; ?>
</html>