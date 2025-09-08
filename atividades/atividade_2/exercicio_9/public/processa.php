<?php
session_start();

// Se o número aleatório ainda não está salvo na sessão, cria um
if (!isset($_SESSION['valor_aleatorio'])) {
    $_SESSION['valor_aleatorio'] = mt_rand(1, 10);
}


if (!isset($_SESSION['tentativa'])) {
    $_SESSION['tentativa'] = 0;
}

$valor_aleatorio = $_SESSION['valor_aleatorio'];


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