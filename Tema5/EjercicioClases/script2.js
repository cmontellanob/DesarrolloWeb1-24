function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            personas = JSON.parse(ajax.responseText)
            console.log(personas);
            contenido.innerHTML = "";
            html=`<table>
            <tr style="background-color:blue;color:white">
            <td>fotografia</td>
            <td>id</td>
            <td>nombres</td>
            <td>apelidos</td>
            <td>edad</td>
            <td>sexo</td>
            <td>ocupacion</td>
            </tr>
            `
            for (i = 0; i < personas.length; i++) {
                
                if (i % 2 == 0) {
                    html+=`<tr style="background-color:white">`
                } else {
                    html+=`<tr style="background-color:gray">`
                }
            html+=`<td><img style="width:50px" src="images/${personas[i].fotografia}"></td>    
            <td>${personas[i].id}</td>
            <td>${personas[i].nombres}</td>
            <td>${personas[i].apellidos}</td>
            <td>${personas[i].edad}</td>
            <td>${personas[i].sexo}</td>
            <td>${personas[i].ocupacion}</td>
            </tr>`

            }
            html+=`</table>`
            contenido.innerHTML=html
        }
    }
    ajax.send();
}