<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <h1>Operadores Aritméticos</h1>
    <div class="caixa">
        <form method="POST" action="resultado.php">
            <label>Digite o primeiro Número:</label>
            <input type="number" id="numeroUM" name="n1" placeholder="Ex: 10">
            <label>Digite o segundo Número:</label>
            <input type="number" id="numeroDOIS" name="n2" placeholder="Ex: 12">
            <label>Selecione a operação:</label>
            <select name="operacao">
                <option value="soma">Somar</option>
                <option value="menos">Subtrair</option>
                <option value="divisao">Dividir</option>
                <option value="multiplicar">Multiplicar</option>
            </select><br>

            <button type="submit" id="btnConta">Calcular</button>
        </form>
    </div>
    <p id="resultado"></p>
    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>