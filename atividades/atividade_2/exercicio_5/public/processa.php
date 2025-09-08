<?php

    function numeroPrimo ($numero) {
        $primos = [];

        for ($i = 2; $i <= $numero; $i++) {

            $num_primos = true;

                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j === 0) {
                        $num_primos = false;
                        break;
                    }
                }
            
            if ($num_primos) {
                $primos[] = $i;
            }
        }

        return $primos;
    }
    

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);

            $primos = numeroPrimo($numero);

            echo implode(', ', $primos);
        }
    }
?>
