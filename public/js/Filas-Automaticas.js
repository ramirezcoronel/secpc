const cantidad = document.getElementById("cantidad");
const mostrar = document.getElementById("mostrar");
const ocultar = document.getElementById("ocultar");
const filasBoton = document.getElementById("filas-btn");
const tabla = document.getElementById("tabla");
const submit = document.getElementById("submit");
const formulario = document.getElementById("form");
const divRestantes = document.getElementById("restantes");
var select = document.getElementById("select");
var nombre = document.getElementById("nombre");

function validar(){
  if(select=="seleccione"||nombre==""||cantidad==""){
    alert("no se puede dejar campos vacios")
    return false;
  }
}

mostrar.addEventListener("click", () => {
  mostrarElemento(filasBoton);
  mostrarElemento(tabla);
});

ocultar.addEventListener("click", () => {
  ocultarElemento(filasBoton);
  ocultarElemento(tabla);
});

filasBoton.addEventListener("click", () => {
  let filas = parseInt(document.getElementById("cantidad").value);
  agregarFila(filas, 0);
});

submit.addEventListener("click", () => {
  let filas = parseInt(document.getElementById("cantidad").value);
  let rest = parseInt(document.getElementById("rest").textContent);
  if (rest == 0) {
    formulario.submit();
  }
  agregarFila(rest, filas - rest);
});

function mostrarElemento(elemento) {
  elemento.classList.add("aparecer");
}
function ocultarElemento(elemento) {
  elemento.classList.remove("aparecer");
}

function agregarFila(filas, menos) {
  tabla.innerHTML = "";
  let restantes = filas - 5 < 0 ? 0 : filas - 5;

  if (filas > 5) {
    for (let i = 0 + menos; i < 5 + menos; i++) {
      formatoFila(i + 1);
    }
    submit.innerHTML = "siguiente";
  } else {
    for (let i = menos; i < filas + menos; i++) {
      formatoFila(i + 1);
    }
    submit.innerHTML = "Guardar";
  }
  cajaRestantes(restantes);
}
function cajaRestantes(n) {
  divRestantes.innerHTML = "";
  let contenido = "Quedan restantes: <span id='rest'>";
  let restantes = n;
  divRestantes.innerHTML += contenido + restantes + "</span></div>";
}

function formatoFila(n) {
  
  let format_fila =
    "<tr> <td>" +
    n +
    "</td> <td><input type='text' name='serial id='serial" +
    n +
    "' placeholder='Ingrese Serial N°" +
    n +
    "'></td>";
  tabla.innerHTML += format_fila;
}
