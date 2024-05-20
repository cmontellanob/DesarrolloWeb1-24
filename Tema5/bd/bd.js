function listar(parametros) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    if (parametros) {
        ajax.open("get", "read.php?" + parametros, true);
    }
    else {
        ajax.open("get", "read.php", true);
    }

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function buscar() {
    palabra = document.getElementById('filtro').value;
    listar("filtro=" + palabra);
}

function cargar(url) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function crea_lista_parametros() {
	var nombre = document.getElementById("nombre").value;
	var apellidos = document.getElementById("apellidos").value;
	var edad = document.getElementById("edad").value;
	var ocupacion_id = document.getElementById("ocupacion_id").value;
	return "nombre=" + encodeURIComponent(nombre) +
		"&apellidos=" + encodeURIComponent(apellidos) +
		"&edad=" + encodeURIComponent(edad) +
		"&sexo=" + encodeURIComponent('M') +
        "&ocupacion_id=" + encodeURIComponent(ocupacion_id)

}
function insertar() {
    var datos = document.getElementById('datos');
    var formulario = document.getElementById("datos-persona");
    console.log(formulario.action);
    console.log(formulario);
    var parametros = crea_lista_parametros();
    //

    console.log(parametros)
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    
    ajax.open("post", "insertar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
    ajax.send(parametros);
}