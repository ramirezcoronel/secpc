document.addEventListener('DOMContentLoaded', function () {
  const submit = document.querySelector('.submit');

  submit.addEventListener('click', (e)=>{
    const inputs = document.querySelectorAll('.input')
    inputs.forEach(input => {
      if (checkLength(input, 4)) {
        e.preventDefault()
      }
    })
  })

})

function checkLength(el, min) {
    if (el.value.trim().length >= min) {
      return false;
    } else {
      alert(el.dataset.id + ' necesita almenos '+ min +' caracteres.');
      el.value = ""
      return true;
    }
}
