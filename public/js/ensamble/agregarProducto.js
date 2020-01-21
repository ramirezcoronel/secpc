(( c, d, a )=>{

	d.addEventListener('DOMContentLoaded',()=>{

		submit.addEventListener('click', (e)=>{
			if (validacionEstaBien()) { //function principal de validacion
				c('validacion correcta!')
			}else{
				e.preventDefault() //prevenir que se envie el formulario
				c('validacion incorrecta')
			}
		})
	})

	const validacionEstaBien = ()=> {

		let validacion = d.querySelector('#validacion').dataset.validacion
		if ( validacion === 'parte') {

			let cantidad    = d.querySelector('#cantidadparte')
			let codparte   = d.querySelector('#codparte') //input de apellido 
			let serial   = d.querySelector('#numserialfabricante') //input de apellido
			let codEjemplar   = d.querySelector('#codigoEjemplar') //input de apellido

			let submit = d.querySelector('#submit') //input de submit

			let esSerializable = codparte.options[parte.selectedIndex].dataset.serial
			if ( esSerializable === '1' ) {
				if (estaVacio(codparte, cantidadparte, numserialfabricante, codEjemplar)) {
					alert('Asegurese de llenar todos los campos')
					return false
				} else if ( !coincideExpresionRegular(codEjemplar)) {
					alert('Hay campos que no contienen el tipo de dato esperado')
					return false
				}
			} else {
				if (estaVacio(codparte, cantidadparte, codEjemplar)) {
					alert('Asegurese de llenar todos los campos')
					return false
				} else if (!coincideExpresionRegular(codEjemplar)) {
					alert('Hay campos que no contienen el tipo de dato esperado')
					return false
				}
			}

			
			return true

		} else {
			//tomar inputs y botones
			let codigo            = d.querySelector('#codigo') //input de nombre
			let codigoEquipo       = d.querySelector('#select') //input de apellido
			let fecha = d.querySelector('#fecha')

			let submit = d.querySelector('#submit') //input de submit

			if (estaVacio( codigo, codigoEquipo, fecha)) {
				alert('Asegurese de llenar todos los campos')
				return false
			} else if (!coincideExpresionRegular(codigo)) {
				alert('Hay campos que no contienen el tipo de dato esperado')
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
	
	parte.addEventListener('click', ()=>{
		let serial = parte.options[parte.selectedIndex].dataset.serial
		let cantidad = parte.options[parte.selectedIndex].dataset.cantidad

		if (serial === '1') {
			serialBox.readOnly = false;
			serialBox.parentNode.style.display = 'flex';
			serialBox.required = true;
			cantidadBox.readOnly = true;
			cantidadBox.value = '1';
		}else{
			serialBox.readOnly = true;
			serialBox.required = false;
			serialBox.value = '';
			serialBox.parentNode.style.display = 'none';
			cantidadBox.readOnly = true;
			cantidadBox.value = cantidad;
		}
	})



})(console.log, document, alert)


