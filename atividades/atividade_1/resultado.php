<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando conta</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <!--Título da página-->
    <h1>Resultado</h1>

    <p>
        <?php
            // Verifica se o campo 'mensagem' foi enviado através do formulário
            if (isset($_POST['n1']) && isset($_POST['n2'])) {

                // A função htmlspecialchars impede que o usuário envie códigos perigosos (como script).
                // $_POST['mensagem'] é o valor enviado pelo formulário com método POST.
                $n1 = floatval(htmlspecialchars($_POST['n1']));
                $n2 = floatval(htmlspecialchars($_POST['n2']));
                $operacao = $_POST['operacao'];

                if ($operacao == 'soma') {
                    $resultado = $n1 + $n2;
                    echo "Resultado da soma de $n1 e $n2: <strong>$resultado</strong>";
                } else if ($operacao == 'menos') {
                    $resultado = $n1 - $n2;
                    echo "Resultado da subtração de $n1 e $n2: <strong>$resultado</strong>";
                } else if ($operacao == 'divisao') {
                    if ($n2 == 0) {
                        echo 'Não existe divisão por ZERO!!';
                    } else {
                    $resultado = $n1 / $n2;
                    echo "Resultado da divisão de $n1 e $n2: <strong>$resultado</strong>";
                    }
                } else if ($operacao == 'multiplicar') {
                    $resultado = $n1 * $n2;
                    echo "Resultado da multiplicação de $n1 e $n2: <strong>$resultado</strong>";
                }
                
            } 
                
            
        ?>
    </p>

    
    <!--Link para voltar à página do formulário-->
    <a href="index.php">Voltar</a>
</body>

</html>