<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>

    <h1>Tabuada</h1>


    <form method="POST" action="public/processa.php">
        <label>Deseja ver a tabuada de qual número?:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Ver tabuada</button>
    </form>


    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>