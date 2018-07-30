document.body.onload = () => {
  const signupForm = document.forms

  signupForm.onsubmit = function onFormSubmit(ev) {
    if (!validateSignupForm()) {
      ev.preventDefault()
    }
  }

  function validateSignupForm() {
    const { nombre, pass, apellido,
     nacionalidad, email } = signupForm.elements

    if (!validateEmail(email.value)) return false
    if (!validatePassword(password.value)) return false
    if (!validatePasswordRepeat(password.value, password_confirmation.value)) return false
    if (!validateUsername(nombre.value)) return false
    if (!validateUsername(apellido.value)) return false
    
    return true
  }

  function validateEmail(email) {
    var re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (re.test(email)) return true

    swal('Error', 'Ingrese un email válido', 'error')
    return false
  }

  function validatePassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
    if (re.test(password)) return true

    swal('Error', 'Ingrese una contraseña válida', 'error')
    return false
  }

  const validatePasswordRepeat = (password, password_confirmation) => {
    if (password === password_confirmation) return true

    swal('Error', 'Las contraseñas no son iguales', 'error')
    return false
  }

  function validateUsername(nombre) {
    if (nombre.length > 0) return true

    swal('Error', 'Ingrese un nombre de usuario', 'error')
    return false
  }

  function signupUser() {
    hacerRequest(requestEnd)

    function requestEnd() {
      swal('Bienvenido!')
    }
  }


}
