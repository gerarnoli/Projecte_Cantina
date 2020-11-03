window.onload = function () {
  
  
  let compra = {
    id: "default",
    precio: 0,
    cantidad: 0
  };

  let preciototal = 0;

  function anyadircompra (id, precio, cantidad){
    compra.id = id;
    compra.precio = parseInt(precio);
    compra.cantidad = parseInt(cantidad);
  }

  let contarItems =  document.getElementsByClassName("item").length;

  for (let i = 0; i < contarItems; i++) {    
    document.getElementsByClassName("item")[i].onclick = function() {
      this.dataset.cantidad++;
      anyadircompra(this.dataset,idproducto, this.dataset.precio, this.dataset.cantidad);
      preciototal = preciototal + compra.precio;
      document.getElementById("precioTotal").innerHTML = "Total: $" + preciototal;
      if (this.dataset.cantidad <= 1) {
        let compra = document.createElement("div");
        compra.setAttribute("id", carrito.id);
        document.getElementById("carritoDeCompras").appendChild(compra);
        agregarElementos(this.dataset.cantidad);       
      } else {
        agregarElementos();
      }


    }
  };
  

  


  //function incrementar () {
    
  

 
  
}

//let sumar = document.getElementsByClassName("add");
//sumar.addEventListener("click", incrementar);
//location href lo envia a la siguiente pagina



