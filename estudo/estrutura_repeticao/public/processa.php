<?php
// Função FOR
function exibirFor() {
    for ($i = 1; $i <= 5; $i++) {
        echo "Contagem com FOR : $i<br>";
    }
}

// Função com While
function exibirWhile() {
    $i = 1;
    while ($i <=5) {
        echo "Contagem com While: $i<br>";
        $i++;
    }
}

// Função FOREACH
function exibirForeach() {
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta<br>";
    }
}
?>