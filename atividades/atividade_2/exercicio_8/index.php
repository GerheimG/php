<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
    </header>
    <main>
        <form action="" method="post">
            <h3>Caixa</h3>
            <label>Valor para saque</label>
            <input type="number" name="valor">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <footer></footer>
    <?php
        require 'public/processa.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['valor'])) {
                calcularSaque($_POST['valor']);
            }
        }
    ?>
</body>
</html>