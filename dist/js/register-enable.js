'use strict'

let buttonRegisterContentEnable = document.getElementById('login-input-register-button')
console.log(buttonRegisterContentEnable)

buttonRegisterContentEnable.addEventListener('click', () => {
    let registerContent = document.getElementById('register-content')
    let loginContent = document.getElementById('login-content')
    loginContent.style.display = 'none'
    registerContent.style.display = 'block'
})



