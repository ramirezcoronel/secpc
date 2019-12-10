//obtengo el controlador a travez de la URL
let controller = window.location.pathname.slice(1).split('/').filter((path) => path !== 'secpc' )[0]

const data = {
  controlador: controller,
  metodo: form.dataset.eliminar //obtengo la funcion de eliminar a travez de las etiquetas data
}

document.addEventListener("DOMContentLoaded", function() {


   const boton = document.querySelectorAll('.eliminar')

   boton.forEach(boton => {
       boton.addEventListener('click', (e)=>{
           let respuesta = confirm('¿Esta seguro de eliminar este usuario?')
           let id = boton.dataset.id;
            if ( respuesta ) {
                //solicitud AJAX
                let url = 'http://localhost/secpc/'+ data['controlador'] +'/'+ data['metodo'] +'/' + id

                httpRequest(url, function() {
                    console.log(this.responseText);
                    console.log(this);


                    const tbody = document.querySelector("#tbody-"+ data['controlador'])
                    const fila = document.querySelector("#fila-" + id)


                    tbody.removeChild(fila);

                })

            } else {
                e.preventDefault()
            }
       })
   })

   function httpRequest(url, callback) {
       const http = new XMLHttpRequest();

       http.open("GET", url)
       http.send()

       http.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200){
                callback.apply(http)
            }

       }
   }

  });