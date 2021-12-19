window.onload = () => {
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    //'use strict';
    // Fetch the form we want to apply custom Bootstrap validation styles to
    const form = document.forms.form_register;
    form.addEventListener('submit', function (event) {
        if(!this.checkValidity())
        {
            event.preventDefault();
            event.stopPropagation();
            this.classList.add('was-validated');
        }
    });
    form.password2.onchange = check_passwords;
}

function check_passwords()
{
    const pass1 = document.getElementById('password1');
    const pass2 = document.getElementById('password2');
    if(pass1.value != pass2.value)
        pass2.setCustomValidity("As passwords têm que ser iguais");
    else
        pass2.setCustomValidity('');
}

function call_alert(level, message)
{
    const alert = document.createElement('div');
    alert.innerHTML = '<div class="alert alert-' + level + ' alert-dismissible fade show" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    alertPlaceholder.append(alert);
}