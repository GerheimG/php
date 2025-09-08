<?php
    function multiplicar($numero, $i) {
        return $i * $numero;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);

            for ($i = 1; $i <=10; $i++) {
                $resultado = multiplicar($i, $numero);
                echo "$i * $numero = $resultado<br>";
            }
        }
    }
?>