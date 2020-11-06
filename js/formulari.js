window.onload = function() {
    document.getElementById("seleccio").innerHTML = "<h2>Llista de comandes</h2>";

    document.getElementById("seleccio").innerHTML += localStorage.getItem("comandes");
}

let llista_dades='<ul>';

function validar() {
    email = document.getElementById("email").value;
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {

        let nom = document.getElementById("nom").value;
        let cognom = document.getElementById("cognom").value;
        let email = document.getElementById("email").value;

        llista_dades += `<li>Nom: ${nom}</li>` + '<br>';
        llista_dades += `<li>Cognom: ${cognom}</li>` + '<br>';
        llista_dades += `<li>Email: ${email}</li>` + '<br>';

        llista_dades+='</ul>';
        localStorage.setItem("dades", llista_dades);

        return (location.href='confirmacio.php');
    } else {
        alert("L'adreça email és incorrecta")
        return (false);
    }
}