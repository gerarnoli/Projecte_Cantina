
let comandes = localStorage.getItem("comandes", "");

let llista_comandes='<ul class=llista>';

for (let i=0; i<comandes.length; i++){
    llista_comandes += `<li>${comandes[i]}</li>` + '<br>';
}
llista_comandes+='</ul>';


document.getElementsByClassName("seleccio").innerHTML = llista_comandes;