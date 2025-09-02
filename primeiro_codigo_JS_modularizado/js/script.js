document.addEventListener('DOMContentLoaded', function(){

    // Seleciona o formulário
    const form = document.getElementById('meuFormulario');

    // Ouvinte para o envio do formulário
    form.addEventListener('submit', function(event){
        // Pega o valor do campo de texto
        const mensagem = document.getElementById('mensagem').value.trim();

        // Verifica se o campo está vazio
        if (mensagem === "") {
            alert('Por favor, digite uma mensagem antes de enviar.');
            event.preventDefault(); // Impede o envio  do formulário
            return;
        }

        // Pergunta se o usuário quer mesmo enviar
        const confirmar = confirm("Deseja realmente enviar esta mensagem?");
        if (!confirmar) {
            event.preventDefault(); // Cancela o envio
        }
    });
});