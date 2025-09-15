<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Estruturas de Repetição em PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    
    <header>
        <h1>Exemplo de Estruturas de Repetição em PHP</h1>
    </header>

    <main>
        <!--Seção que exibe o FOR-->
        <section>
            <h2>Estrutura FOR</h2>
            <div class="caixa">
                <?php
                    // Inclui o arquivo que contém as funções
                    // Em seguida, executa a função que exibe o loop FOR
                    include "public/processa.php";
                    exibirFor();
                ?>
            </div>
        </section>

        <!--Seção que exibe o WHILE-->
        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    //Chama a função que exibe o lopp WHILE
                    exibirWhile();
                ?>
            </div>
        </section>

        <!--Seção que exibe o FOREACH-->
        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    // Chama a funçao que exibe oloop FOREACH
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>