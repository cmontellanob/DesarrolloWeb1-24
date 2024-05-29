function cargarcontenido(url) {

    var datos = document.getElementById('menu');
    fetch(url)
        .then(response => response.text())
        .then(data => datos.innerHTML = data);


}
function mostrarimagen(imagen)
{
    var principal=document.getElementById('principal');
    principal.innerHTML="";
    var img=document.createElement('img');
    img.src="images/"+imagen
    principal.appendChild(img);
    var mensaje=document.getElementById('mensaje');
    mensaje.innerHTML=imagen;
    
}