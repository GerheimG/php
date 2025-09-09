<?php
session_start();
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

    <?php if (isset($_SESSION['erro'])): ?> 
        <p style="color:red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label>Usuário:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
    require 'usuarios.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $login_valido = false;
        $nome_usuario = '';

        foreach ($usuarios as $u) {
            if ($u['usuario'] === $usuario && $u['senha'] === $senha) {
                $login_valido = true;
                $nome_usuario = $u['nome'];
                break;
            }
        }

        if ($login_valido) {
            session_regenerate_id(true);
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nome'] = $nome_usuario;
            $_SESSION['ultimo_acesso'] = time();

            header("Location: restrita.php");
            exit();
        } else {
            $_SESSION['erro'] = 'Usuário ou senha inválidos';
            header("Location: index.php");
            exit();
        }
    }
    ?>

    <script src="js/script.js"></script>
</body>
</html>
