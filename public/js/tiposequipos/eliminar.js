document.addEventListener("DOMContentLoaded", function() {

   const boton = document.querySelectorAll('.eliminar')

   boton.forEach(boton => {
       boton.addEventListener('click', (e)=>{
           let respuesta = confirm('¿Esta seguro de eliminar este tipo de equipo?')
           let codigo = boton.dataset.codigo;
            if ( respuesta ) {
                //solicitud AJAX
                let url = 'http://localhost/secpc/equipos/eliminarTipoEquipo/' + codigo

                httpRequest(url, function() {
                    console.log(this.responseText);
                    const tbody = document.querySelector("#tbody-tipos")
                    let filatag = "#fila-" + codigo
                    const fila = document.querySelector(filatag)
                    console.log(tbody);
                    console.log(filatag);

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