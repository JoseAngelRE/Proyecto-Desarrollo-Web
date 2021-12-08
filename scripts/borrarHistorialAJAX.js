
window.onload =  function () {
    document.getElementById("botonGet").onclick = ready;
}

function ready(){
    var xhttp = getHTTP();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            eval(this.responseText);
        }
    };
    xhttp.open("POST", getRequest());
    xhttp.send();
}

function getHTTP(){
    let xhttp;
    if (window.XMLHttpRequest){
    xhttp = new XMLHttpRequest();
    } else {
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

function getRequest(){
    return "../backendcodigo/triggerEliminarHistorial.php";
}
