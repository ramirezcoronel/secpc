((c,d)=>{
	d.addEventListener('DOMContentLoaded', ()=>{

		let boton = d.getElementById('close-modal')


		boton.addEventListener('click', ()=>{
			let container = d.querySelector('.modal-container')
			let modal = d.querySelector('.modal-back')
			container.removeChild(modal)
		})
	})
})(console.log, document)