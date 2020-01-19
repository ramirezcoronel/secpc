(function(){
	var formulario = document.getElementsByName('formulario')[0],
		elementos = formulario.elements,

		num = document.getElementById('num'),
		horaInicio = document.getElementById('horaInicio'),
		horaFin = document.getElementById('horaFin'),
		fecha = document.getElementById('fecha'),
		falla = document.getElementById('falla'),
		descripcion = document.getElementById('descripcion'),
		select = document.getElementById('select'),

		boton = document.getElementById('submit');
		
		var campos = function(e){
			if (   formulario.num.value == 0 
				|| formulario.horaInicio.value == 0 
				|| formulario.horaFin.value == 0 
				|| formulario.fecha.value == 0
				|| formulario.falla.value == 0 
				|| formulario.descripcion.value == 0 
				|| formulario.select.value == 0
				) {
				alert("Todos los campos son obligatorios");
				e.preventDefault()
			}else{
				Vnum(e);
			}
		}


		var Vnum = function(e){
		var er = /^[0-9]{1,5}$/i;
			var respuesta = er.test(num.value);
			if (respuesta == false) {
				alert("Numero de prueba soporte solo acepta digitos numericos");
		 		e.preventDefault()
			}else{
				Vhora(e);
			}
		}
		var Vhora = function(e){
			if (horaInicio.value > horaFin.value) {
				alert("La hora de inicio no puede ser mayor a la hora final");
		 		e.preventDefault()
			}else{
				Vfalla(e);
			}
		}
		
		var Vfalla = function(e){
		var er = /\w+\s/g;
			var respuesta = er.test(falla.value);
			if (respuesta == false) {
				alert("Debe poner la descrpcion de la falla reportada, que sea menor de 100 caracteres");
		 		e.preventDefault()
			}else{
				Vdescripcion(e);
			}
		}
		var Vdescripcion = function(e){
		var er = /\w+\s/g;
			var respuesta = er.test(descripcion.value);
			if (respuesta == false) {
				alert("Debe poner una descripcion completa del soporte, que sea menor de 100 caracteres");
		 		e.preventDefault()
			}else{
				confirmar(e);
			}
		}

	function confirmar(e)
    {
    var opcion = confirm("¿Esta seguro que quiere guardar esta prueba?");
    if (opcion == true) {
	} else {
		alert("se ha cancelado");
	    e.preventDefault()
	}
}

		formulario.addEventListener("submit", campos);
}())