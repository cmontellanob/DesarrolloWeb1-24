function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            personas = JSON.parse(ajax.responseText)
            console.log(personas);
            contenido.innerHTML = "";
            let elementotabla = document.createElement("table");
            contenido.appendChild(elementotabla);
            let elementotr = document.createElement("tr");
            elementotr.style.backgroundColor = "blue";
            elementotr.style.color = "white";
            elementotabla.appendChild(elementotr);
            var elementotd = document.createElement("td");
            var elementotd2 = document.createElement("td");
            var elementotd3 = document.createElement("td");
            var elementotd4 = document.createElement("td");
            var elementotd5 = document.createElement("td");
            var elementotd6 = document.createElement("td");
            var elementotd7 = document.createElement("td");
            elementotr.appendChild(elementotd);
            elementotr.appendChild(elementotd2);
            elementotr.appendChild(elementotd3);
            elementotr.appendChild(elementotd4);
            elementotr.appendChild(elementotd5);
            elementotr.appendChild(elementotd6);
            elementotr.appendChild(elementotd7);
            elementotd.innerHTML = "fotografia";
            elementotd2.innerHTML = "id";
            elementotd3.innerHTML = "nombre";
            elementotd4.innerHTML = "apellidos";
            elementotd5.innerHTML = "edad";
            elementotd6.innerHTML = "sexo";
            elementotd7.innerHTML = "ocupacion";
            for (i = 0; i < personas.length; i++) {
                let elementotr = document.createElement("tr");
                elementotabla.appendChild(elementotr);
                if (i % 2 == 0) {
                    elementotr.style.backgroundColor = "white";
                } else {
                    elementotr.style.backgroundColor = "gray";
                }

            let elementotd = document.createElement("td");
            let elementotd2 = document.createElement("td");
            let elementotd3 = document.createElement("td");
            let elementotd4 = document.createElement("td");
            let elementotd5 = document.createElement("td");
            let elementotd6 = document.createElement("td");
            let elementotd7 = document.createElement("td");
            let fotografia = document.createElement("img");
            fotografia.width = 50;
            fotografia.src='images/'+personas[i].fotografia;
            elementotr.appendChild(elementotd);
            elementotr.appendChild(elementotd2);
            elementotr.appendChild(elementotd3);
            elementotr.appendChild(elementotd4);
            elementotr.appendChild(elementotd5);
            elementotr.appendChild(elementotd6);
            elementotr.appendChild(elementotd7);
            elementotd.appendChild(fotografia);
            elementotd2.innerHTML = personas[i].id;
            elementotd3.innerHTML = personas[i].nombres;
            elementotd4.innerHTML = personas[i].apellidos;
            elementotd5.innerHTML = personas[i].edad;
            elementotd6.innerHTML = personas[i].sexo;
            elementotd7.innerHTML = personas[i].ocupacion;
            }
        }
    }
    ajax.send();
}