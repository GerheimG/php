<?php 
function calcularSaque($valor) {
    $notas = [100, 50, 20, 10, 5];

    foreach ($notas as $nota) {
        if ($valor >= $nota) {
            $numeroNotas = intdiv($valor, $nota);
            $valor = $valor % $nota;
            echo "<p class='resultado'>Sacou $numeroNotas nota(s) de $nota</p>";
        }
    }

    if ($valor == 0) {
        echo "<p class='resultado'>Valor retirado</p>";
    } else {
        echo "<p class='resultado'>Não foi possível sacar R$" . $valor;
        echo " pela falta de notas compatíveis.<br>Valor restante: R$" . $valor . "</p>";
    }
}
?>