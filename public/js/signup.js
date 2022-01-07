window.onload = () => {
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    //'use strict';
    // Fetch the form we want to apply custom Bootstrap validation styles to
    const form = document.forms.signup_form;
    form.addEventListener('submit', function (event) {
        if(!this.checkValidity())
        {
            event.preventDefault();
            event.stopPropagation();
            this.classList.add('was-validated');
        }
    });
    document.getElementById('signup_form_password2').oninput = check_passwords;
}

function check_passwords()
{
    const pass1 = document.getElementById('signup_form_password');
    const pass2 = document.getElementById('signup_form_password2');
    if(pass1.value != pass2.value)
        pass2.setCustomValidity("As passwords têm que ser iguais");
    else
        pass2.setCustomValidity('');
}
