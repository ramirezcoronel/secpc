(( c, d, a )=>{

	d.addEventListener('DOMContentLoaded',()=>{

		submit.addEventListener('click', (e)=>{

			e.preventDefault() //prevenir que se envie el formulario

			if (validacionEstaBien()) { //function principal de validacion
				c('validacion correcta!')
			}else{
				c('validacion incorrecta')
			}
		})


	})

	const validacionEstaBien = ()=> {
		//tomar inputs y botones
		let nombre = d.querySelector('#nombre') //input de nombre
		let apellido = d.querySelector('#apellido') //input de apellido
		let username = d.querySelector('#username') //input de username
		let pass = d.querySelector('#pass') //input de pass
		let conPass = d.querySelector('#conPass') //input de confirmar pass
		let cedula = d.querySelector('#cedula') //input de confirmar cedula

		let submit = d.querySelector('#submit') //input de submit

		if (estaVacio(nombre, apellido, username, pass, conPass, cedula)) {
			return false
		}
		return true
	}

	const estaVacio = (...elementos) => {
		let validacion = false
		elementos.forEach(elemento => {
			let valor = elemento.value.trim()
 			//en caso de que haya alguno vacio
			if (valor.length <= 3) {
				//si entra en la condicional es porque
				//hay uno vacio
				validacion = true 
			} 
		})
		return validacion
	}

})(console.log, document, alert)
