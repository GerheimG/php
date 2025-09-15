<?php
session_start();// Sempre iniciar sessão

// Verifica se usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Verifica tempo de inatividade (10 minutoa = 600 segundos)
if (time() - $_SESSION['ultimo_acesso'] > 600) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Atualiza último acesso
$_SESSION['ultimo_acesso'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h1>
    <p>Você está na área restrita</p>

    <p><a href="logout.php">Sair</a></p>
</body>
</html>