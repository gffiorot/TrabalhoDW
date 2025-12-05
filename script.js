botao = document.querySelector('.botaoIniciar');
paginaDestino = 'registro.html'; 


botao.addEventListener('click', function() {
    

    console.log('Botão clicado! Redirecionando...');

    window.location.href = paginaDestino;
});