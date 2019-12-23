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

		let submit = d.querySelector('#submit') //input de submit

		c(estaVacio(nombre, apellido, username, pass, conPass))
		
		
	}

	const estaVacio = (...elementos) => {
		let validacion = false
		elementos.forEach(elemento => {
			let valor = elemento.value.trim()
 			//en caso de que haya alguno vacio
			if (valor.length <= 3) {
				//si entra en la condicional es porque
				//hay uno vacio
				c(elemento)
				validacion = true 
			} 
		})
		return validacion
	}

})(console.log, document, alert)
