//boton de enviar formulario
const bInsertar = document.getElementById("enviardatos");

bInsertar.addEventListener("click", agregarelements);

mostrartodos();

function agregarelements() {

    //valores de los campo del formul
    const texto = document.querySelector("#titulo").value;
    const descp = document.querySelector("#descripcion").value;

    //validar con checkbox
    if (document.getElementById('checkbox1').checked) {

        var datos = "texto=" + texto + "& descp=" + descp;
        console.log(datos);

        //peticion ajax para inserta datos en database (agergar.php)
        var xml = new XMLHttpRequest();
        xml.open('POST', 'php/agregar.php', true);
        xml.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');

        xml.onreadystatechange = function() {
            if (xml.readyState == 4 && xml.status == 200) {
                //alert("Has añadido un texto!!");

                //funcion para mostrar datos en pantalla
                mostrartodos();
            }
        }
        xml.send(datos);

    }


}

//funcion para mostrar datos en pantalla
function mostrartodos() {
    // Realiza consulta ala database todos los datos
    var xml = new XMLHttpRequest();
    xml.open('GET', 'php/mostrartodo.php', true);
    xml.setRequestHeader('Content-Type',
        'application/x-www-form-urlencoded');

    xml.onreadystatechange = function() {
        if (xml.readyState == 4 && xml.status == 200) {
            //coloca la objeto JSON en el id mostrartodo
            document.getElementById("mostrartodo").innerHTML =
                xml.responseText;
            document.getElementById('checkbox1').checked = false;
        }
    }
    xml.send();
}

// funcion borras registros de la database
// el parametro id lo recibe del evento click borrar en el archivo verelements.php
function borrar(id) {
    var datos = "idelement=" + id;
    var xml = new XMLHttpRequest();

    xml.open("POST", "php/borrar.php", true);
    xml.setRequestHeader("Content-Type",
        "application/x-www-form-urlencoded")
    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            //alert('Has boorado un elemento!!');
            mostrartodos();
        }
    }
    xml.send(datos);
}

// funcion update registros de la database
// el parametro id lo recibe del evento click editar en el archivo verelements.php

function editar(id) {
    var texto = document.querySelector("#editartext" + id).value;
    var descp = document.querySelector("#editardescrip" + id).value;

    var datos = "idelement=" + id + "&texto=" + texto +
        "&descp=" + descp;
    var xml = new XMLHttpRequest();

    xml.open("POST", "php/editar.php", true);
    xml.setRequestHeader("Content-Type",
        "application/x-www-form-urlencoded");
    xml.onreadystatechange = function() {
        if (xml.readyState === 4 && xml.status === 200) {
            //alert('Has actualizado un elemento!!');
            mostrartodos();
        }
    }
    xml.send(datos);
}