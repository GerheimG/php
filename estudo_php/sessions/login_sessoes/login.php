<?php
session_start(); // Inicia sessão para verificar se á está logado

// e já estiver logado, redireciona para a´rea restrita
if (isset($_SESSION['usuario'])) {
    header("Location: restrita.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com Sessões</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <h1>Login</h1>

    <!--Exibe mensagem de erro se existir-->
    <?php if (isset($_SESSION['erro'])): ?> 
        <p style="color:red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
    <?php endif; ?>
    
    <!--Formulário envia para valida.php-->
    <form action="valida.php" method="post">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
    

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>