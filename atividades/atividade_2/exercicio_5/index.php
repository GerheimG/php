<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/estilo.css">
    <title>Geradorde números primos</title>
</head>
<body>
    <header>
        <h1>Gerador de números primos</h1>
    </header>

    <main>
        <section>
            <form  method="POST" action="public/processa.php">
                <label>Digite até qual valor deseja ver os primos:</label><br>
                <input type="number" id="numero" name="numero" required><br>

                <button type="submit">Gerar</button>
            </form>
        </section>
    </main>
    
</body>
</html>
