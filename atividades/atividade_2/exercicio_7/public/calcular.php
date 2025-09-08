<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST['valor']);
    $de = $_POST['opcao1'];
    $para = $_POST['opcao2'];

    function celsiusParaFahrenheit($c) {
        return ($c * 9/5) + 32;
    }

    function celsiusParaKelvin($c) {
        return $c + 273.15;
    }

    function fahrenheitParaCelsius($f) {
        return ($f - 32) * 5/9;
    }

    function fahrenheitParaKelvin($f) {
        return ($f - 32) * 5/9 + 273.15;
    }

    function kelvinParaCelsius($k) {
        return $k - 273.15;
    }

    function kelvinParaFahrenheit($k) {
        return ($k - 273.15) * 9/5 + 32;
    }

    if ($de == $para) {
        $resultado = $valor;
    } else {
        // Converte de acordo com as opções
        if ($de == "celsius" && $para == "fahrenheit") {
            $resultado = celsiusParaFahrenheit($valor);
        } elseif ($de == "celsius" && $para == "kelvin") {
            $resultado = celsiusParaKelvin($valor);
        } elseif ($de == "fahrenheit" && $para == "celsius") {
            $resultado = fahrenheitParaCelsius($valor);
        } elseif ($de == "fahrenheit" && $para == "kelvin") {
            $resultado = fahrenheitParaKelvin($valor);
        } elseif ($de == "kelvin" && $para == "celsius") {
            $resultado = kelvinParaCelsius($valor);
        } elseif ($de == "kelvin" && $para == "fahrenheit") {
            $resultado = kelvinParaFahrenheit($valor);
        } else {
            echo "Conversão inválida!";
            exit;
        }
    }

    echo "<h3>Resultado: $valor $de é igual a " . round($resultado, 2) . " $para</h3>";
}
?>
