<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperaturas</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>

    <h2>Conversor de Temperaturas</h2>

    <form method="POST" action="public/calcular.php">

        <label>Informe a temperatura:</label>
        <input type="number" name="valor" placeholder="Ex: 32" required><br>

        <label>Escolha</label>
        <select name="opcao1">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>

        <label>E para qual vai ser convertida</label>
        <select name="opcao2">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>

        <input type="submit" name="Gerar Resultado">
    </form>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>