function departamentos() {
    var departamento = document.getElementById('departamento');
    console.log(departamento)
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "departamentos.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            departamentos = JSON.parse(ajax.responseText)
            console.log(departamentos);

            for (i = 0; i < departamentos.length; i++) {
                let elemento = document.createElement("option");
                elemento.value = departamentos[i].id

                elemento.innerHTML = departamentos[i].departamento
                if (i==0)
                    {
                        elemento.selected=true;
                    }
                departamento.appendChild(elemento);

            }
        }
    }
    ajax.send();
}
function obtenerprovincias() {
    var provincia = document.getElementById('provincia');
    provincia.innerHTML='';
    var iddepartamento=document.getElementById('departamento').value;
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "provincias.php?id="+iddepartamento, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            provincias = JSON.parse(ajax.responseText)
            
            for (i = 0; i < provincias.length; i++) {
                let elemento = document.createElement("option");
                elemento.value = provincias[i].id
                elemento.innerHTML = provincias[i].provincia
                provincia.appendChild(elemento);

            }
        }
    }
    ajax.send();
}