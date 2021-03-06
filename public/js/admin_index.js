window.onload = () => {
    /*
    const change_kart_state = document.querySelectorAll('.btn_change_kart_status');
    const estados = [
        'Aprovado',
        'Pendente',
        'Entregue',
        'Cancelado',
    ];
    for(let btn of change_kart_state)
    {
        btn.addEventListener('click', function(event) {
            swal({
                title: 'Alterar estado do carrinho',
                icon: 'info',
                closeOnClickOutside: false,
                closeOnEsc: false,
                buttons: {
                    aprovado: {
                        text: 'Aprovado',
                        value: 'Aprovado',
                    },
                    pendente: {
                        text: 'Pendente',
                        value: 'Pendente',
                    },
                    entregue: {
                        text: 'Entregue',
                        value: 'Entregue',
                    },
                    cancelado: {
                        text: 'Cancelado',
                        value: 'Cancelado',
                    },
                },
            });
        });
    }*/
    const check_elems = document.getElementsByClassName('check');
    const btn_delete_elems = document.getElementsByClassName('btn-danger');
    Object.entries(check_elems).forEach((element, index) => {
        element[1].addEventListener('click', function() {
            if(this.checked)
                btn_delete_elems[index].hidden = false;
            else
                btn_delete_elems[index].hidden = true;
        });
    });

    check_status();
}

//Função para colorir a informação de estado da encomenda
function check_status()
{
    'use strict';
    const ESTADOS_POSSIVEIS = {
        'Recebido': 'text-primary',
        'Aprovado': 'text-info',
        'Pendente': 'text-warning',
        'Entregue': 'text-success',
        'Cancelado': 'text-danger',
    };
    const estados_carrinhos = document.getElementsByClassName('estado-carrinho');
    for(let elemento of estados_carrinhos)
        elemento.classList.add(ESTADOS_POSSIVEIS[elemento.textContent]);
}