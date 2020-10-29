let pedidos = [];

function enviarPedido (){
    var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
    for (var i = 0; i < checkboxes.length; i++) {
        pedidos.push(checkboxes[i].value)
      }
      console.log(pedidos);
};



//location href lo envia a la siguiente pagina



