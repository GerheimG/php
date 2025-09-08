<?php
function mostrarTabuada($numero) {
    echo "<h2>Tabuada do $numero</h2>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

// Verifica se veio um número do formulário
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
} else {
    $numero = null;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>



    <?php
    if ($numero !== null) {
        mostrarTabuada($numero);
    } else {
        echo "<p>Nenhum número foi enviado.</p>";
    }
    ?>
    <br><a href="index.php">← Voltar</a>
</body>
</html>