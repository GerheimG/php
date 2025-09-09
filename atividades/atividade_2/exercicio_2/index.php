<?php
session_start();

// Começa o array de alunas na sessão
if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

// Se o botão 'limpar lista' for clicado
if (isset($_POST['limpar'])) {
    session_destroy();
    session_start(); // reinicia a seesão apos destruir
    $_SESSION['alunos'] = []; // reinicializa o array
}

// Enviou o formulario pra adicionar aluno
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpar'])) {
    // Cria um aluno novo
    $novo_aluno = [
        'nome' => $_POST['nome'],
        'Nota1' => (float) $_POST['nota1'],
        'Nota2' => (float) $_POST['nota2'],
        'Nota3' => (float) $_POST['nota3'],
        'Nota4' => (float) $_POST['nota4'],
    ];

    // Add a lista na sessão
    $_SESSION['alunos'][] = $novo_aluno;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Notas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <h1>Sistema de Notas</h1>

    <form method="post">
        <label>Nome do Aluno:</label><br>
        <input type="text" name="nome" placeholder="Agostinho Carrara" required><br>
        <hr>
        <label>Nota 1:</label><br>
        <input type="number" name="nota1" placeholder="Ex: 7" required><br>
        <hr>
        <label>Nota 2:</label><br>
        <input type="number" name="nota2" placeholder="Ex: 5" required><br>
        <hr>
        <label>Nota 3:</label><br>
        <input type="number" name="nota3" placeholder="Ex: 9" required><br>
        <hr>
        <label>Nota 4:</label><br>
        <input type="number" name="nota4" placeholder="Ex: 1" required><br>
        <hr>

        <input type="submit" value="Gerar Resultado">
    </form>
    <!--btão pra limpar lista-->
    <form method="POST" style="margin-top: 20px;">
        <input type="hidden" name="limpar" value="1">
        <input type="submit" value="Limpar Lista de Alunos">
    </form>
    <?php if (!empty($_SESSION['alunos'])): ?>
        <hr>
        <h2>Lista de Alunos Cadastrados</h2>
        <?php foreach ($_SESSION['alunos'] as $aluno): ?>
            <h3><?= htmlspecialchars($aluno['nome']) ?></h3>
            <ul>
                <li>Nota 1: <?= $aluno['Nota1']?></li>
                <li>Nota 2: <?= $aluno['Nota2']?></li>
                <li>Nota 3: <?= $aluno['Nota3']?></li>
                <li>Nota 4: <?= $aluno['Nota4']?></li>
                <?php
                    $soma = $aluno['Nota1'] + $aluno['Nota2'] + $aluno['Nota3'] + $aluno['Nota4'];
                    $media = $soma / 4;
                ?>
                <li><strong>Soma:</strong><?= $soma ?></li>
                <li><strong>Média:</strong><?= number_format($media, 2, ',', '.') ?></li>
            </ul>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>

