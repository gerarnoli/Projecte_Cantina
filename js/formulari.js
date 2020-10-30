let comandes =  localStorage.getItem("");

let llista_comandes='<ul class=llista>';

for (let i=0; i<comandes.length; i++){
    llista_comandes += `<li>${localStorage.setItem("comandes[i]")}</li>` + '<br>';
}
llista_comandes+='</ul>';

