(( c, d, a )=>{

	d.addEventListener('DOMContentLoaded',()=>{

		submit.addEventListener('click', (e)=>{

			

			if (validacionEstaBien()) { //function principal de validacion
				c('validacion correcta!')
			}else{
				c('validacion incorrecta')
				e.preventDefault() //prevenir que se envie el formulario
			}
		})


	})

	const validacionEstaBien = ()=> {
		//tomar inputs y botones
		let idmodelo = d.querySelector('#idmodelo') //input de id
		let nommodelo = d.querySelector('#nommodelo') //input de nombre
		let select = d.querySelector('#select') //input de nombre

		let submit = d.querySelector('#submit') //input de submit

		if (estaVacio(idmodelo, nommodelo, select) || !coincideExpresionRegular(idmodelo, nommodelo)) {
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
				c(elemento)
				elemento.parentNode.style.border = '2px solid #e93624'
				elemento.parentNode.style.borderRadius = '5px'
			} else {
				elemento.parentNode.style.border = '0px solid #fff'
				elemento.parentNode.style.borderRadius = '5px'
			}
		})
		return validacion
	}

	const coincideExpresionRegular = (...elementos) => {
		let validacion = true
		c('prueba')
		elementos.forEach(elemento => {
			let patron = elemento.dataset.patron
			let valor = elemento.value.trim()

			if (!valor.match(patron)) {
				c('no coincide')
				validacion = false
			}
		})
		return validacion
	}

})(console.log, document, alert)
