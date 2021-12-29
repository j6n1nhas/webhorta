window.onload = () => {
    //demo();
}

function sleep(ms)
{
    return new Promise(resolve => setTimeout(resolve, ms));
}
  
async function demo()
{
    const progress_bar = document.getElementById('progress-bar');
    // Sleep in loop
    for (let i = 0; i < 10; i++)
    {
        console.log('Passo ' + i.toString());
        await sleep(1000);
        if(i > 0)
            progress_bar.style.width = (i*10).toString() + "%";
            //progress_bar.classList.replace('w-' + ((i-1)*10).toString(), 'w-' + (i*10).toString());
    }
}
let scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#list-projetos'
  });
  