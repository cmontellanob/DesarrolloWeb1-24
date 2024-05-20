function cargarContenido(abrir) {
	var contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function Preinscribir() {
	var contenedor = document.getElementById('contenido');
	var datos=new FormData();
	datos.append("tTitulo",document.getElementById("tTitulo").value);
	datos.append("tIdentidad",document.getElementById("tIdentidad").value);
	datos.append("tNombres",document.getElementById("tNombres").value);
	datos.append("tApellidos",document.getElementById("tApellidos").value);
	datos.append("RGSexo",document.getElementById("RGSexo").value);
	datos.append("tEdad",document.getElementById("tEdad").value);
	datos.append("tEmail",document.getElementById("tEmail").value);
	datos.append("SDepartamento",document.getElementById("SDepartamento").value);
	datos.append("tProfesion",document.getElementById("tProfesion").value);
	datos.append("sTipo",document.getElementById("sTipo").value);
	datos.append("tNumeroDeposito",document.getElementById("tNumeroDeposito").value);
	fetch("preinscribir.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

