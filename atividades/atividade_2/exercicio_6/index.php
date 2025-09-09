<?php 
    session_start();
 ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>
    
    <form method="GET" action="processa.php">
        <label>Escolha uma ação:</label><br>
        <button type="submit" name="acao" value="cadastrar">Cadastrar Produto</button><br>
        <button type="submit" name="acao" value="listar">Listar Produto</button><br>
        <button type="submit" name="acao" value="procurar">Procurar Produto</button><br>
    </form>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>