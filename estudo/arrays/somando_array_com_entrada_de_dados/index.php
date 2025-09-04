<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação dos caracteres para suportar acentuação -->
    <title>Cadastro de Alunos</title> <!-- Título que aparece na aba do navegador -->
    <style>
        /* Define a fonte e o espaçamento do corpo da página */
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        /* Estiliza os campos de texto e números para ficarem mais legíveis */
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px; /* limita o tamanho máximo do campo */
        }

        /* Estiliza o botão de enviar (submit) */
        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h1>Cadastro de Aluno</h1> <!-- Título principal da página -->

<!-- Formulário que envia os dados para esta mesma página via método POST -->
<form method="POST">
    <label>Nome do Aluno:</label><br>
    <!-- Campo para digitar o nome, obrigatório (required) -->
    <input type="text" name="nome" required><br>

    <label>Nota 1:</label><br>
    <!-- Campo para digitar a nota 1, aceita números decimais, obrigatório -->
    <input type="number" name="nota1" step="0.01" required><br>

    <label>Nota 2:</label><br>
    <input type="number" name="nota2" step="0.01" required><br>

    <label>Nota 3:</label><br>
    <input type="number" name="nota3" step="0.01" required><br>

    <label>Nota 4:</label><br>
    <input type="number" name="nota4" step="0.01" required><br>

    <!-- Botão para enviar o formulário -->
    <input type="submit" value="Cadastrar">
</form>

<?php
// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Cria um array associativo $aluno com os dados recebidos do formulário
    $aluno = [
        'nome'  => $_POST['nome'],       // Pega o nome digitado pelo usuário
        'Nota1' => (float) $_POST['nota1'], // Converte a nota 1 para número decimal
        'Nota2' => (float) $_POST['nota2'], // Converte a nota 2 para número decimal
        'Nota3' => (float) $_POST['nota3'], // Converte a nota 3 para número decimal
        'Nota4' => (float) $_POST['nota4'], // Converte a nota 4 para número decimal
    ];

    echo "<hr>"; // Linha horizontal para separar visualmente o resultado

    echo "<h2>Resultado:</h2>"; // Título da seção de resultado

    // Exibe o nome do aluno, usando htmlspecialchars para evitar problemas de segurança
    echo "<h3>Aluno: " . htmlspecialchars($aluno['nome']) . "</h3>";

    // Inicializa as variáveis para soma das notas e contagem da quantidade de notas
    $soma_notas = 0;
    $qtd_notas = 0;

    // Loop que percorre cada elemento do array $aluno
    foreach ($aluno as $chave => $valor) {
        // Verifica se a chave NÃO é "nome" e se o valor é numérico (nota)
        if ($chave !== 'nome' && is_numeric($valor)) {
            // Exibe o nome da nota e o valor digitado
            echo "$chave: $valor<br>";

            // Soma o valor da nota à variável $soma_notas
            $soma_notas += $valor;

            // Incrementa a quantidade de notas contadas
            $qtd_notas++;
        }
    }

    // Calcula a média das notas dividindo a soma pela quantidade
    $media = $soma_notas / $qtd_notas;

    // Exibe a soma das notas
    echo "<br><strong>Soma das Notas:</strong> $soma_notas<br>";

    // Exibe a média formatada com 2 casas decimais e vírgula como separador decimal
    echo "<strong>Média:</strong> " . number_format($media, 2, ',', '.');
}
?>
</body>
</html>
