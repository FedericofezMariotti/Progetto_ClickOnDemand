

let authLogin = document.querySelector('#authLogin');

let authRegister = document.querySelector('#authRegister');

let authRegisterForm = document.querySelector('#authRegisterForm');

let authLoginForm = document.querySelector('#authLoginForm');

let formWrapper = document.querySelector('#formWrapper');




authLogin.addEventListener('click', () => {
    authLoginForm.classList.remove('d-none');
    authRegisterForm.classList.add('d-none'); 
    authRegisterForm.classList.remove('order-first');  
    authLogin.classList.add('active');
    authRegister.classList.remove('active');
})

authRegister.addEventListener('click', () => {
    authRegisterForm.classList.remove('d-none');
    authLoginForm.classList.add('d-none'); 
    authRegisterForm.classList.add('order-first');
    authLogin.classList.remove('active');
    authRegister.classList.add('active');   
})
