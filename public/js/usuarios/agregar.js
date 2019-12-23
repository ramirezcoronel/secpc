(( c, d, a )=>{

	d.addEventListener('DOMContentLoaded',()=>{
		let nombre = d.querySelector('#nombre')

		estaVacio(nombre)



	})




	const estaVacio = (elemento) => {
		if (elemento.value) {
			c('esta bien')
		} else {
			c ('esta mal')
		}
	}

})(console.log, document, alert)
