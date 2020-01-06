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

		let validacion = d.querySelector('#validacion').dataset.validacion
		if ( validacion === 'movimiento') {

			let num    = d.querySelector('#num')
			let tipo   = d.querySelector('#tipo') //input de apellido 
			let hora   = d.querySelector('#hora') //input de apellido
			let fecha  = d.querySelector('#fecha') //input de apellido

			let submit = d.querySelector('#submit') //input de submit

			if (estaVacio( num, tipo, hora, fecha)) {
				return false
			} 
			return true

		} else {
			//tomar inputs y botones
			let codparte            = d.querySelector('#codparte') //input de nombre
			let cantidadparte       = d.querySelector('#cantidadparte') //input de apellido
			let numserialfabricante = d.querySelector('#numserialfabricante') //input de apellido 

			let submit = d.querySelector('#submit') //input de submit

			if (estaVacio(codparte, cantidadparte)) {
				return false
			} 
			return true
		}
	}

	const estaVacio = (...elementos) => {
		let validacion = false
		elementos.forEach(elemento => {
			let valor = elemento.value.trim()
 			//en caso de que haya alguno vacio
			if (valor.length < 1) {
				//si entra en la condicional es porque
				//hay uno vacio
				validacion = true
				elemento.parentNode.style.border = '2px solid #e93624'
				elemento.parentNode.style.borderRadius = '5px'
				c(valor)
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
