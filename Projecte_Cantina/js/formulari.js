

let llista_comandes='<ul class=llista>';

for (let i=0; i<comandes.length; i++){
    llista_comandes += `<li>${localStorage.getItem("comandes[i]")}</li>` + '<br>';
}
llista_comandes+='</ul>';


document.getElementsByClassName("seleccio").innerHTML = llista_comandes;