<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Concatenando o array com Implode()</h1>
    </header>
    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1 - Extract </h2>';

            // Criação de um array associativo com tres elementos
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            // Exibe o conteudo do array original de forma formatada
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            // array_filter() remove qualquer valor "falso" (como null, 0, string vazia, etc)
            // implode(' ', ...) junta os valores do array resultante em uma unica string, separados por espaço
            $registro = implode(' ', array_filter($array));

            // Exibe a string concatenada
            echo '<hr>';
            print_r($array);
            echo '</hr>';
        ?>
    </main>
</body>
</html>