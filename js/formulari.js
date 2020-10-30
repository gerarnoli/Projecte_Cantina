

let comandes =  localStorage.getItem("");

document.getElementById("seleccio").innerHTML = "<h2>Llista de comandes<h2>";

let llista_comandes='<ul class=llista>';

for (let i=0; i<comandes.length; i++){
    llista_comandes += `<li>${localStorage.getItem("comandes[i]")}</li>` + '<br>';
}
llista_comandes+='</ul>';




let pantalla =  localStorage.setItem("pantalla", 3);




