$(document).ready(()=> {
    $('.eliminar').click(function (e) {
        let respuesta = confirm('¿Esta seguro de eliminar este usuario?')
        if (respuesta === false) {
            e.preventDefault();
        }
    })
})