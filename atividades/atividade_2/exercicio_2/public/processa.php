<?php

    function media($nota1, $nota2, $nota3, $nota4) {
        return ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    }

    function situacao($resultado) {
        if ($resultado >= 15) {
            $situacao = "Aprovado";
        } else if ($resultado <= 10) {
            $situacao = "Reprovado";
        } else {
            $situacao = "Recuperação";
        }
        return $situacao;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST['nome'])) {
            $nome = htmlspecialchars(trim($_POST['nome']));
        }
        $nota1 = isset($_POST['nota1']) ? intval($_POST['nota1']) : 0;
        $nota2 = isset($_POST['nota2']) ? intval($_POST['nota2']) : 0;
        $nota3 = isset($_POST['nota3']) ? intval($_POST['nota3']) : 0;
        $nota4 = isset($_POST['nota4']) ? intval($_POST['nota4']) : 0;
        
    }
        $situacao_final = situacao($resultado);
        $resultado = media($nota1, $nota2, $nota3, $nota4); 
        echo "Notas: $nota1  | $nota3  | $nota3  | $nota4  | Média: $resultado  | Situação: $situacao_final"   

?>
