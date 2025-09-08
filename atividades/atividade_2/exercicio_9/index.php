<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhar</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <h1>Advinhar número</h1>
    <p>Tente advinhar o numéro aleatório de 1 a 100</p>

    <form action="" method="POST">
        <label>Insira um número</label>
        <input type="number" name="valor" id="valor" placeholder="Ex: 99" required>

        <input type="submit">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === "POST") : ?>
        <p>Numero sorteado:<?= htmlspecialchars($valor_aleatorio) ?></p>
        <p>Você digitou:<?= htmlspecialchars($valor) ?></p>
        <p><?= htmlspecialchars($resultado) ?></p>
        <p>Número de tentativas:<?= htmlspecialchars($tentativas) ?></p> 
    <?php endif; ?>
    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>