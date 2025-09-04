<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>]
        <h1>Extraindo criando um array: compact</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            // Declaração de variaveis individuais
            $nome = 'Maria';
            $idade = 50;
            $peso = 50.5;

            // A função compact() crua um array associativo com base nas variaveis informadas
            // As chaves do array serão os nomes das variaveis ('nome', 'idade', 'peso')
            // E os valores seão os valores dessas variaveis
            $array = compact('nome', 'idade', 'peso');

            // Exibe o array resultante no navegador, formatando para melhor visualização
            echo '<pre>';
                print_r($array); // Mostra o array: Array ( [ nome] ) => Maria [idade] => 50 [peso] => 50.5 )
            echo '</pre>';
        ?>
    </main>
</body>
</html>