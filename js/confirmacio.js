window.onload = function() {
    document.getElementById("dades").innerHTML = "<h2>Comanda</h2>";

    document.getElementById("dades").innerHTML += localStorage.getItem("comandes");

    document.getElementById("dades").innerHTML += "<h2>Dades personals</h2>";

    document.getElementById("dades").innerHTML += localStorage.getItem("dades");

}