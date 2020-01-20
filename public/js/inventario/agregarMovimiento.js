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
			let numserialfabricante = d.querySelector('#numserialfabricante')

			let submit = d.querySelector('#submit') //input de submit
			let esSerializable = codparte.options[parte.selectedIndex].dataset.serial
			if ( esSerializable === '1' ) {
				if (estaVacio(codparte, cantidadparte, numserialfabricante)) {
					return false
				} 
			} else {
				if (estaVacio(codparte, cantidadparte)) {
					return false
				} 
			}

			return true
		}
	}

	const estaVacio = (...elementos) => {
		let validacion = false
		elementos.forEach(elemento => {
			let valor = elemento.value.trim()
 			//en caso de que haya alguno vacio
			if (valor.length <= 0) {
				//si entra en la condicional es porque
				//hay uno vacio
				validacion = true 
				elemento.classList.add('alerta-input')
			} else {
				elemento.classList.remove('alerta-input')
			}
		})
		return validacion
	}

	const coincideExpresionRegular = (...elementos) => {
		let validacion = true
		elementos.forEach(elemento => {
			let patron = elemento.dataset.patron
			let valor = elemento.value.trim()

			if (!valor.match(patron)) {
				c(elemento.nextElementSibling)
				validacion = false
				elemento.classList.add('alerta-input')
				elemento.nextElementSibling.classList.remove('esconder')
			} else {
				elemento.classList.remove('alerta-input')
				elemento.nextElementSibling.classList.add('esconder')
			}
		})
		return validacion
	}

	/******************************************
		SCRIPT PARA APARECER Y DESAPARECER
	******************************************/
	let parte       = d.querySelector('#codparte')
	let cantidadBox = d.querySelector('#cantidadparte') //input de apellido
	let serialBox   = d.querySelector('#numserialfabricante') //input de apellido 

	serialBox.readOnly = true;
			serialBox.value = '';
			serialBox.parentNode.style.display = 'none';
			cantidadBox.readOnly = false;
			cantidadBox.value = '';
	
	parte.addEventListener('click', ()=>{
		let serial = parte.options[parte.selectedIndex].dataset.serial

		if (serial === '1') {
			serialBox.readOnly = false;
			serialBox.parentNode.style.display = 'flex';
			cantidadBox.readOnly = true;
			cantidadBox.value = '1';
		}else{
			serialBox.readOnly = true;
			serialBox.value = '';
			serialBox.parentNode.style.display = 'none';
			cantidadBox.readOnly = false;
			cantidadBox.value = '';
		}
	})



})(console.log, document, alert)
