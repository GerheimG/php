<?php
// Inicia a sessão (sempre deve estar no topo da página antes de qualquer HTML)
session_start();

// Verifica se o nome já foi enviado pelo formulário
if (isset($_POST['nome'])) {
    //Armazena o nome enviado na sessão
    $_SESSION['nome'] = $_POST['nome'];
}
?>

<!--Formulário simples para o usuário digitar o nome-->
<form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
// Verifica se já existe um nome armaznado a sessão
if (isset($_SESSION['nme'])) {
    // Exie uma mensagem com o nome armazenado
    echo "<p>Olá," - $_SESSION['nome'] - "! Seja bem-vindo de volta.</p>";
}
?>