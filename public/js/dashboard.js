window.onload = () => {
    //Obtenho os botões de edição
    const buttons = document.querySelectorAll('.btn-sm');
    //Para cada um
    buttons.forEach(function (button) {
        //Crio uma instância de botão bootstrap
        let b = new bootstrap.Button(button);
        //Defino um evento de click em cada um
        button.addEventListener('click', function(button) {
            //Crio a constante prefixo
            const prefix = 'signup_form_';
            //Corto o pedaço do nome do botão que me interessa (a seguir ao btn_)
            const meu_nome = this.id.slice(4);
            //Defino a string para procurar pelo elemento
            const search_field = prefix + meu_nome;
            //Procuro pelo elemento input correspondente
            const element = document.getElementById(search_field);
            const btn_submit = document.getElementById('btn_submit');
            //Altero o estado do botão
            b.toggle;
            //Altero o estado do elemento input
            switch(b._element.attributes[4].value)
            {
                case 'false':
                    element.disabled = true;
                    btn_submit.disabled = true;
                    break;
                case 'true':
                    element.disabled = false;
                    element.focus();
                    btn_submit.disabled = false;
                    break;
            }
        });
    });

    //Obtenho o botão de editar a password
    const btn_password = document.getElementById('btn_password');
    //Defino o evento de click para este botão
    btn_password.addEventListener('click', function() {
        //Crio uma instância de botão bootstrap
        let b = new bootstrap.Button(this);
        //Obtenho os elementos de password escondidos
        const password = document.getElementById('signup_form_password');
        const password2 = document.getElementById('signup_form_password2');
        const btn_submit = document.getElementById('btn_submit');
        //Defino o estado do elemento da password
        if(b._element.attributes[4].value == 'true')
        {
            password.disabled = false;
            password.hidden = false;
            password2.disabled = false;
            password2.hidden = false;
            password.parentElement.hidden = false;
            password2.parentElement.hidden = false;
            btn_submit.disabled = false;
            password.focus();
        }
        else
        {
            password.disabled = true;
            password.hidden = true;
            password2.disabled = true;
            password2.hidden = true;
            btn_submit.disabled = true;
            password.parentElement.hidden = true;
            password2.parentElement.hidden = true;
        }
    });
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
    const form = document.forms.signup_form;
    form.addEventListener('submit', function (event) {
        if(!form.checkValidity())
        {
            event.preventDefault()
            event.stopPropagation()
        }
        form.classList.add('was-validated');
    }, false);
    document.getElementById('signup_form_password2').oninput = check_passwords;
})();

//Função para verificar se as passwords são iguais
function check_passwords()
{
    const pass1 = document.getElementById('signup_form_password');
    const pass2 = document.getElementById('signup_form_password2');
    if(pass1.value != pass2.value)
        pass2.setCustomValidity("As passwords têm que ser iguais");
    else
        pass2.setCustomValidity('');
}
