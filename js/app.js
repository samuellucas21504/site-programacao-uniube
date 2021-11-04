//pega a span certificado e os radios pessoa
let btnInicio = document.getElementById('btnEstudoInicio');
let btnEspaco = document.getElementById('btnEspaco');
let btnFinal = document.getElementById('btnEstudoFinal');
let div2 = document.getElementById('div2');
let tr1 = document.getElementById('tr1');
let tr2 = document.getElementById('tr2');
let tr3 = document.getElementById('tr3');
// Checa se pessoa física mudou de estado e remove os elementos
// ja existentes e adiciona o necessario
btnInicio.addEventListener('click', ()=> {
    //Deleta o conteudo
    btnEspacoInicio.innerHTML =  '';

    btnFinal.style = 'visibility: visible;';
    btnFinal.addEventListener('click', ()=> {
        tr1.style = 'visibility: visible;';
        tr2.style = 'visibility: visible;';
        tr3.style = 'visibility: visible;';
        btnEspacoFinal.innerHTML = '';
        div2.innerHTML = "(～￣▽￣)～✨Parabens~✨";
    })

})

