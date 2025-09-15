<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Tarefas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <h1>Minhas Tarefas</h1>

    <!--Formualrio para adicionar nova tarefa-->
    <input type="text" id="novaTarefa" placeholder="Digite uma nova tarefa...">
    <button id="btnAdicionar">Adicionar</button>

    <!--Lista de tarefas-->
    <ul id="listaTarefas"></ul>

    <script>
        // Função para buscar e exibir as tarefas
        async function carregarTarefas() {
            const resposta = await fetch("../api/listar.php");
            const tarefas = await resposta.json();

            const lista = document.getElementById("listaTarefas");
            lista.innerHTML = ""; // lIMPA ANTES DE LISTAR

            tarefas.foreach(t => {
                const li = document.createElement("li");
                li.textContent = t.titulo;

                if (t.concluida == 1) {
                    li.style.textDecoration = "line-through";
                }    
            })
        }
    </script>
    
</body>
</html>