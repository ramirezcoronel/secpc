function habilitar(obj) {
  var hab;
  frm=obj.form;
  num=obj.selectedIndex;
  if (num==1) hab=true;
  else if (num==2) hab=false;
  frm.observacion.disabled=hab;
}

(function(){
	var formulario = document.getElementsByName('formulario')[0],
		elementos = formulario.elements,
		numprueba = document.getElementById('numprueba'),
		codprueba = document.getElementById('codprueba'),
		producto = document.getElementById('producto'),
		fecha = document.getElementById('fecha'),
		hora = document.getElementById('hora'),
		resultado = document.getElementById('resultado'),
		observacion = document.getElementById('observacion'),
		boton = document.getElementById('btn');
		
		var campos = function(e){
			if (formulario.codprueba.value == 0 
				|| formulario.producto.value == 0 
				|| formulario.fecha.value == 0 
				|| formulario.hora.value == 0
				|| formulario.numprueba.value == 0) {
				alert("Todos los campos son obligatorios");
				e.preventDefault()
			}else{
				Vnumprueba(e);
			}
		}
		var Vresultado = function(e){
			resul = formulario.resultado.selectedIndex;
			if (resul == 0) {
				Vobservacion(e);
			}else{
			confirmar(e);
			}
			
		}
			var Vnumprueba = function(e){
		var er = /^[0-9]{1,5}$/;
			var respuesta = er.test(numprueba.value);
			if (respuesta == false) {
				alert("Numero de prueba solo acepta numeros de 5 digitos como maximo");
		 		e.preventDefault()
			}else{
				Vresultado(e);
			}
		}

		var Vobservacion = function(e){
		if(formulario.observacion.value == 0){
					alert("No puede dejar el campo observacion vacio.");
					e.preventDefault();
			}
			else{
				confirmar(e);
			}
		}
	

	function confirmar(e)
    {
    var opcion = confirm("¿Confirmar?");
    if (opcion == true) {
	} else {
		alert("se ha cancelado");
	    e.preventDefault()
	}
}
		formulario.addEventListener("submit", campos);
}())
