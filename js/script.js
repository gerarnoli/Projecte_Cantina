window.onload = function () {
  

  //let sumar = document.getElementsByClassName("add");

  //sumar.addEventListener("click", incrementar);

document.getElementsByClassName("add")[1].addEventListener("click", function (){
    valor = document.getElementById("cantidad");
    valor.value ++;
    console.log("Prova");
});

document.getElementsByClassName("reduce")[1].addEventListener("click", function (){
  valor = document.getElementById("cantidad");
  valor.value --;
  console.log("Prova");
});

//function incrementar () {
    
//};

 
  
}



//location href lo envia a la siguiente pagina



