
//document.getElementById("seleccio").innerHTML = "<h2>Llista de comandes</h2>";

document.getElementById("seleccio").innerHTML = localStorage.getItem("comandes");
    


function validar() {
    email = document.getElementById("email").value;
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
        return (location.href='confirmacio.php');
    } else {
        alert("L'adreça email és incorrecta")
        return (false);
    }
}