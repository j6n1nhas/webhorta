window.onload = () => {
    //Agarrar os botões e alterar o seu fundo quando em modo mobile
    const btns = document.querySelectorAll('.btn');
    if(window.innerWidth < 600)
    {
        //Se o display for pequeno, alteramos a classe Bootstrap dos botões para alterar a sua aparência
        btns.forEach(function(btn) {
            btn.classList.replace('btn-outline-success', 'btn-success');
            btn.classList.replace('btn-outline-danger', 'btn-danger');
        });
    }
}