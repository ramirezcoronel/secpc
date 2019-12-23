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
		let submit = d.querySelector('#submit') //input de nombre

		if (estaVacio(nombre)) {
			return false
		}
		return true
	}

	const estaVacio = (elemento) => {
		let valor = elemento.value.trim() 
		if (valor.length >= 3) {
			return false
		} else {
			a('asegurese de llenar todos los campos')
			return true
		}
	}

})(console.log, document, alert)
