<?php
session_start();

// Se o número aleatório ainda não está salvo na sessão, cria um
if (!isset($_SESSION['valor_aleatorio'])) {
    $_SESSION['valor_aleatorio'] = mt_rand(1, 100);
}


if (!isset($_SESSION['tentativa'])) {
    $_SESSION['tentativa'] = 0;
}

$valor_aleatorio = $_SESSION['valor_aleatorio'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhar</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>

    <h1>Advinhar número</h1>
    <p>Tente advinhar o numéro aleatório de 1 a 100</p>

    <form action="" method="POST">
        <label>Insira um número</label>
        <input type="number" name="valor" placeholder="Ex: 99" required>

        <input type="submit" name="Gerar Resultado">
    </form>

    <p value="dica"></p>
    <p value="resultado"></p>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $_SESSION['tentativa']++;
            $valor = intval($_POST['valor']);

            if ($valor < $valor_aleatorio) {
                echo "<p>O número é maior que $valor</p>";

            } else if ($valor > $valor_aleatorio) {
                echo "<p>O número é menor que $valor</p>";

            } else if ($valor == $valor_aleatorio) {
                echo "Você acertou o número<br>Seu chute: $valor<br>Número sorteado: $valor_aleatorio<br>Com " . $_SESSION['tentativa'] . " tentativas</p>";
                session_destroy();
            }
        }
    
    ?>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>