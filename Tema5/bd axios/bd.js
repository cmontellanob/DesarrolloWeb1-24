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
function crearPersona() {
    var datos = document.getElementById('datos');
    var formulario = document.getElementById("datos-persona");
  
    var parametros =new FormData(formulario);
    
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    
    ajax.open("post", "insertar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //datos.innerHTML = ajax.responseText
            listar();
        }
    }
    ajax.send(parametros);
}

function editar(id){
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'form_editar.php?id='+id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}
function editarPersona()
{
    var datos = document.getElementById('datos');
    var formulario = document.getElementById("form-editar");
    var parametros= new FormData(formulario); 
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    
    ajax.open("post", "editar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.send(parametros);

}
function eliminar(id){
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", 'eliminar.php?id='+id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}