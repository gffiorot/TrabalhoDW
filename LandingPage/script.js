// Parte do index
botao1 = document.querySelector('.botaoIniciar');
paginaDestino1 = 'registro.php'; 
if (botao1) {
    botao1.addEventListener('click', function() {
        window.location.href = paginaDestino1;
    });
}

// Parte do cadastro
botao2 = document.querySelector('.botaoRegistrar');
paginaDestino2 = 'pagamento.html'; 
if (botao2) { 
    // tem que colocar o if e o prevent por ser formulario
    botao2.addEventListener('click', function(event) {
        event.preventDefault(); 
        window.location.href = paginaDestino2;
    });
}

// Parte do login
botao3 = document.querySelector('.botaoLogin');
paginaDestino3 = 'catalogo.html'; 
if (botao3) { 
    // tem que colocar o if e o prevent por ser formulario
    botao3.addEventListener('click', function(event) {
        event.preventDefault(); 
        window.location.href = paginaDestino3;
    });
}

// Parte do pagamento
botao4 = document.querySelector('.botaoPagar');
paginaDestino4 = 'catalogo.html'; 
if (botao4) { 
    // tem que colocar o if e o prevent por ser formulario
    botao4.addEventListener('click', function(event) {
        event.preventDefault(); 
        window.location.href = paginaDestino4;
    });
}