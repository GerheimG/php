Soma de Notas: 40
<?php
echo '<hr>';

// Título da seção
echo '<h2> 1 - Extract </h2>';

// Criação de um array associativo com nome do aluno e quatro notas
$alunos = [
    'aluno' => 'Maria',
    'Nota1' => 10,
    'Nota2' => 10,
    'Nota3' => 10,
    'Nota4' => 10,
];

// Exibe o conteúdo do array formatado na tela
echo "<pre>";
print_r($alunos);
echo "</pre>";

// Inicializa a variável que armazenará a soma das notas
$soma_notas = 0;
// Loop que percorre o array inteiro
foreach ($alunos as $chave => $valor) {
    // Verifica se o valor atual é numérico (para somar apenas as notas)
    if (is_numeric($valor)) {
        $soma_notas += $valor;
    }
}

// Mostra a soma das notas
echo "<hr>";
print("Soma de Notas: " . $soma_notas);
echo "<hr>";
?>
