let formBtnEl = document.getElementById('form-btn')
let contactBtnEl = document.getElementById('contact-btn')
let nameEl = document.getElementById('input-name')
let emailEl = document.getElementById('input-email')


emailEl.addEventListener('keyup', function(event){
     validEmail = emailEl.checkValidity();
    if ( validEmail ){
        formBtnEl.disabled = false
    } else {
        formBtnEl.disabled = true;

    }
    
})

formBtnEl.addEventListener('click', function(){
    formBtnEl.innerText = "Submitted"
})