<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <h1>Envie sua mensagem:</h1>

    <div class="caixa">
        <form id="meuFormulario" method="POST" action="processa.php">
            <label>Digite sua mensagem:</label>
            <input type="text" id="mensagem" name="mensagem" required><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>