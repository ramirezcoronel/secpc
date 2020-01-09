((d, c)=>{

	let parte       = d.querySelector('#codparte')
	let cantidadBox = d.querySelector('#cantidadparte') //input de apellido
	let serialBox   = d.querySelector('#numserialfabricante') //input de apellido 
	
	parte.addEventListener('click', ()=>{
		let serial = parte.options[parte.selectedIndex].dataset.serial
		let cantidad = parte.options[parte.selectedIndex].dataset.cantidad

		if (serial === '1') {
			serialBox.readOnly = false;
			serialBox.parentNode.style.display = 'flex';
			cantidadBox.readOnly = true;
			cantidadBox.value = '1';
		}else{
			serialBox.readOnly = true;
			serialBox.value = '';
			serialBox.parentNode.style.display = 'none';
			cantidadBox.readOnly = true;
			cantidadBox.value = cantidad;
		}
	})
	
})(document, console.log)