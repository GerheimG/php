<?php
echo '<h2>2 - Dois alunos com 4 notas (usando foreach)</h2>';

$alunos = [
    [
        'nome' => 'Maria',
        'Nota1' => 10,
        'Nota2' => 9,
        'Nota3' => 8,
        'Nota4' => 10,
    ],
    [
        'nome' => 'João',
        'Nota1' => 7,
        'Nota2' => 8,
        'Nota3' => 6,
        'Nota4' => 9,
    ]
];

// Percorre cada aluno no array principal
foreach ($alunos as $aluno) {
    // Armazena o nome do aluno separadamente
    $nome = $aluno['nome'];

    // Inicializa variáveis para soma das notas e contagem
    $soma_notas = 0;
    $qtd_notas = 0;

    // Percorre os dados de cada aluno (chaves e valores)
    foreach ($aluno as $chave => $valor) {
        // Ignora a chave 'nome' e soma apenas valores numéricos
        if ($chave !== 'nome' && is_numeric($valor)) {
            $soma_notas += $valor;   // soma das notas
            $qtd_notas++;            // conta quantas notas foram somadas
        }
    }

    // Calcula a média
    $media = $soma_notas / $qtd_notas;

    // Exibe os dados do aluno
    echo "<h3>Aluno: $nome</h3>";
    echo "Soma: $soma_notas<br>";
    // formata a média com 2 casas decimais
    echo "Média: " . number_format($media, 2, ',', '.') . "<hr>";
}
?>
