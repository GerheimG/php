<?php
session_start(); // Inicia a sessão

// Inicializa as variáveis para evitar avisos
$produto = '';
$preco = '';

// Verifica se o array de produtos existe na sessão, se não, cria um vazio
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

// Se o formulário foi enviado, captura os dados e adiciona no array da sessão
if (isset($_POST['produto']) && isset($_POST['preco'])) {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    $item = [
        'produto' => $produto,
        'preco' => $preco
    ];

    $_SESSION['produtos'][] = $item;
}

// Função para mostrar o formulário, preenchendo os valores atuais
function criarProduto($produto, $preco) {
    echo "
        <form action='' method='post'>
            <label>Nome produto:</label><br>
            <input type='text' value='$produto' name='produto' placeholder='Banana'><br>

            <label>Preço produto:</label>
            <input type='number' value='$preco' name='preco' placeholder='20'><br>

            <button type='submit'>Enviar</button>
        </form>";
}

function listarProdutos($produtos) {
    echo "<h2>Produtos</h2><ol>";
    foreach ($produtos as $produto) {
        echo "<li>Nome: {$produto['produto']} | Preço: {$produto['preco']}</li>";
    }
    echo "</ol>";
}

function procurarProduto($produtos) {
    echo "
        <form action='?acao=procurar' method='post'>
            <label>Nome produto:</label><br>
            <input type='text' value='' name='busca' placeholder='Banana'><br>

            <button type='submit'>Enviar</button>
        </form>";

    if (isset($_POST['busca'])) {
        $busca = $_POST['busca'];
        foreach ($produtos as $produto) {
            if (strpos($produto['produto'], $busca) !== false) {
                echo "Produto selecionado: {$produto['produto']} | Preço: {$produto['preco']}<br>";
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Processar Produtos</title>
    <link rel="stylesheet" href="public/css/estilo.css" />
</head>

<body>
    <header>
        <h1>Processamento de Produtos</h1>
    </header>

    <main>
        <?php
        if (isset($_GET['acao'])) {
            $acao = $_GET['acao'];

            if ($acao == 'cadastrar') {
                criarProduto($produto, $preco);
            } elseif ($acao == 'listar') {
                listarProdutos($_SESSION['produtos']);
            } elseif ($acao == 'procurar') {
                procurarProduto($_SESSION['produtos']);
            } else {
                echo "<p>Escolha uma ação válida.</p>";
            }
        } else {
            echo "<p>Escolha uma ação no menu.</p>";
        }
        ?>

        <p><a href="index.php">Voltar ao menu</a></p>
    </main>
</body>

</html>