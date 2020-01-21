(function(){
	var formulario = document.getElementsByName('formulario')[0],
		elementos = formulario.elements,
		cod = document.getElementById('cod'),
		nombre = document.getElementById('nombre'),
		descripcion = document.getElementById('descripcion'),
		duracion = document.getElementById('password1'),

		boton = document.getElementById('btn');
		
		var campos = function(e){
			if (formulario.cod.value == 0 
				|| formulario.nombre.value == 0 
				|| formulario.descripcion.value == 0 
				|| formulario.duracion.value == 0
				) {
				alert("Todos los campos son obligatorios");
				e.preventDefault()
			}else{
				Vcod(e);
			}
		}


		var Vcod = function(e){
		var er = /^[a-zA-Z]{3}[-][0-9]{3}$/i;
			var respuesta = er.test(cod.value);
			if (respuesta == false) {
				alert("El codigo debe tener el siguiente formato XXX-000");
		 		e.preventDefault()
			}else{
				Vnombre(e);
			}
		}
		var Vnombre = function(e){
		var er = /^[a-z]{3,20}$/i;
			var respuesta = er.test(nombre.value);
			if (respuesta == false) {
				alert("El nombre solo acepta letras y el minimo es de 3 digitos hasta 20");
		 		e.preventDefault()
			}else{
				Vdescripcion(e);
			}
		}
		var Vdescripcion = function(e){
		var er = /\w+\s/g;
			var respuesta = er.test(descripcion.value);
			if (respuesta == false) {
				alert("Debe poner una descripcion completa de la prueba, que sea menor de 100 caracteres");
		 		e.preventDefault()
			}else{
				Vduracion(e);
			}
		}

		var Vduracion = function(e){
		var er = /^[0-9]{1,2}$/i;
			var respuesta = er.test(duracion.value);
			if (respuesta == false) {
				alert("En la duracion se pone un numero entero, para los minutos");
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
