<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas de alunos</title>
</head>
<body>
    <header>
        <h1>Sistema de notas de alunos</h1>
    </header>

    <main>
        <section>
            <form method="POST" action="public/processa.php">
                <label>Nome do aluno:</label><br>
                <input type="text" id="nome" name="nome" required><br>

                <label>Digite as quatro notas:</label><br>
                <input type="number" id="nota1" name="nota1" required><br>
                <input type="number" id="nota2" name="nota2" required><br>
                <input type="number" id="nota3" name="nota3" required><br>
                <input type="number" id="nota4" name="nota4" required><br>

                <button type="submit">Verificar a situação do aluno</button>
            </form>
        </section>
    </main>
    
</body>
</html>
