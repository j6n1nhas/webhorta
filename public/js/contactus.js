//import swal from "sweetalert";

window.onload = () => {
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    //'use strict';
    // Fetch the form we want to apply custom Bootstrap validation styles to
    const form = document.forms.contact_form;
    form.addEventListener('submit', function (event) {
        if(!this.checkValidity() || check_contactos() == false)
        {
            event.preventDefault();
            event.stopPropagation();
            this.classList.add('was-validated');
        }
        else
            this.submit();
    });

    const telefone = document.getElementById('contact_form_telefone');
    const email = document.getElementById('contact_form_email');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    //Iterar sobre as checkboxes
    for(let cb of checkboxes)
    {
        //Adicionar um evento de change a cada checkbox
        cb.addEventListener('change', function() {
            //Se se tratar do telefone
            if(this.value == 'telefone')
            {
                //Se este estiver selecionado
                if(this.checked)
                {
                    //Vai torná-lo ativo e requerer o seu preenchimento
                    telefone.disabled = false;
                    telefone.required = true;
                }
                //Se não estiver selecionado
                else
                {
                    //Vai inativá-lo e torná-lo opcional
                    telefone.disabled = true;
                    telefone.required = false;
                }
            }
            //Se se tratar da escolha pelo e-mail
            else
            {
                //Se o e-mail estiver selecionado
                if(this.checked)
                {
                    //Vai torná-lo ativo e requerer o seu preenchimento
                    email.disabled = false;
                    email.required = true;
                }
                //Se não estiver selecionado
                else
                {
                    //Vai inativá-lo e torná-lo opcional
                    email.disabled = true;
                    email.required = false;
                }
            }
        })
    }
}

//Função para verificar se existe pelo menos um meio de contacto selecionado
function check_contactos()
{
    //Obter o checkbox de telefone
    const opt_telefone = document.getElementById('contact_form_tipo_contacto_0');
    //Obter o checkbox de email
    const opt_email = document.getElementById('contact_form_tipo_contacto_1');
    //Obter o campo input de telefone
    const telefone = document.getElementById('contact_form_telefone');
    //Obter o campo input de email
    const email = document.getElementById('contact_form_email');
    //Se nenhum dos dois estiver selecionado
    if(!opt_email.checked && !opt_telefone.checked)
    {
        //Mostra uma janela modal da biblioteca SweetAlert a avisar o utilizador
        swal({
            'title': 'Meios de contacto',
            'text': 'É necessário escolher pelo menos um meio de contacto, por favor!',
            'icon': 'warning',
        });
        //Devolve falso para não submeter o formulário
        return false;
    }
    return true;
}


