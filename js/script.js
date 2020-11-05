
let llista_comandes='<ul>';

function afegirCarro(input) {
    let tipus = input.getAttribute("id");
    let num = document.getElementById(tipus).value;
    llista_comandes += `<li>${num} de ${tipus}</li>` + '<br>';
    console.log(num);
}

function tanquemLlista() {
    llista_comandes+='</ul>';

    localStorage.setItem("comandes", llista_comandes);

    return (location.href='formulari.php');
}

/*
function actualitzarCarro () {
    document.getElementById("listafinal").innerHTML = localStorage.getItem("comandes");
}
*/