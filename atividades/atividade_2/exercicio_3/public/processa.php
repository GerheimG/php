<?php

    // Função para contar vogais na frase
    // substr_count conta quantas vezes a vogal aparece na frase
    // strtolower para converte as letras em minúscula
    function contagem_vogais($frase, $vogal) {
        return substr_count(strtolower($frase), $vogal);
    }

    // Estou verificando o método POST
    // isset para verificar se a variável veio pelo POST
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['frase'])) {
            // Removendo os espaços
            $frase = htmlspecialchars(trim($_POST['frase']));
        }

        // Array com as vogais que serão contadas
        $vogais = ['a', 'e', 'i', 'o', 'u'];

        // Percorrendo cada vogal do array
        // Chamamdo a função para contar as vogais e 
        // armazenar no array $resultado
        foreach ($vogais as $vogal) {
            $resultado[$vogal] = contagem_vogais($frase, $vogal);  
        }

    }

    // Verificando se o array $resultado não está vazio
    if (!empty($resultado)) {
        // Percorre o array e imprime as vogais e a quantidade
        foreach ($resultado as $vogal => $quantidade) {
            echo "$vogal : $quantidade.<br>";
        }
    }
   
?>
