<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Extraiindo valores com extract()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1 - Extract </h2>';

            // Criação de um array com chave => valor
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            // Exibe o array completo em um formato legiivel
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            // A função extract() transforma as chaves do array em variaveiis
            // Exemplo: cria as variaveis $nome, $idade e $peso
            extract($array);

            echo '<hr>';

            // Exiibe o valor da variavel $nome (que foi criada a partir do array)
            print_r("Valor extraiido: " - $nome);

            echo "<hr>"
        ?>
    </main>
</body>
</html>